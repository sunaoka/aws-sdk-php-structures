<?php

namespace Sunaoka\Aws\Structures\ApiGatewayManagementApi\GetConnection;

trait GetConnectionTrait
{
    /**
     * @param GetConnectionRequest $args
     * @return GetConnectionResponse
     */
    public function getConnection(GetConnectionRequest $args)
    {
        $result = parent::getConnection($args->toArray());
        return new GetConnectionResponse($result->toArray());
    }
}
