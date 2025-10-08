<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteTable;

trait DeleteRouteTableTrait
{
    /**
     * @param DeleteRouteTableRequest $args
     * @return void
     */
    public function deleteRouteTable(DeleteRouteTableRequest $args)
    {
        parent::deleteRouteTable($args->toArray());
    }
}
