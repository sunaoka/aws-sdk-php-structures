<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteTable;

trait CreateRouteTableTrait
{
    /**
     * @param CreateRouteTableRequest $args
     * @return CreateRouteTableResponse
     */
    public function createRouteTable(CreateRouteTableRequest $args)
    {
        $result = parent::createRouteTable($args->toArray());
        return new CreateRouteTableResponse($result->toArray());
    }
}
