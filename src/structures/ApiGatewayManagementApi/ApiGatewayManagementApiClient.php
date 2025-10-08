<?php

namespace Sunaoka\Aws\Structures\ApiGatewayManagementApi;

class ApiGatewayManagementApiClient extends \Aws\ApiGatewayManagementApi\ApiGatewayManagementApiClient
{
    use DeleteConnection\DeleteConnectionTrait;
    use GetConnection\GetConnectionTrait;
    use PostToConnection\PostToConnectionTrait;
}
