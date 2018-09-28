<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\Mastercom;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class Retrievals extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "2a063735-ec38-4d84-8ef6-2b2356fc84d7":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments", "create", array(), array());
            case "89b81a8b-78fa-4fb4-80fd-34cdaa333e89":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/retrievalrequests", "create", array(), array());
            case "8fbf760a-2bf0-446a-83d0-ba8e1d87e1fa":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/retrievalrequests/loaddataforretrievalrequests", "query", array(), array());
            case "4cd3040f-7f86-479b-ae90-fbba7b813888":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/retrievalrequests/{request-id}/documents", "query", array("format"), array());
            case "f774d7b3-063f-4d46-8998-cec4f007f679":
                return new OperationConfig("/mastercom/v3/claims/{claim-id}/retrievalrequests/{request-id}/fulfillments/response", "create", array(), array());
            case "f48b5e54-1343-4e8d-96d1-f26f60a069b8":
                return new OperationConfig("/mastercom/v3/retrievalrequests/status", "update", array(), array());
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function acquirerFulfillARequest($map)
    {
        return self::execute("2a063735-ec38-4d84-8ef6-2b2356fc84d7", new Retrievals($map));
    }





   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function create($map)
    {
        return self::execute("89b81a8b-78fa-4fb4-80fd-34cdaa333e89", new Retrievals($map));
    }










    /**
     * Query objects of type Retrievals by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public static function getPossibleValueListsForCreate($criteria)
    {
        return self::execute("8fbf760a-2bf0-446a-83d0-ba8e1d87e1fa",new Retrievals($criteria));
    }





    /**
     * Query objects of type Retrievals by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public static function getDocumentation($criteria)
    {
        return self::execute("4cd3040f-7f86-479b-ae90-fbba7b813888",new Retrievals($criteria));
    }
   /**
    * Creates object of type Retrievals
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Retrievals of the response of created instance.
    */
    public static function issuerRespondToFulfillment($map)
    {
        return self::execute("f774d7b3-063f-4d46-8998-cec4f007f679", new Retrievals($map));
    }






    /**
     * Updates an object of type Retrievals
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Retrievals of the response
     */
    public function retrievalFullfilmentStatus()  {
        return self::execute("f48b5e54-1343-4e8d-96d1-f26f60a069b8",$this);
    }






}

