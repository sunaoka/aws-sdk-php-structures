<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateRouteTable;

trait DisassociateRouteTableTrait
{
    /**
     * @param DisassociateRouteTableRequest $args
     * @return void
     */
    public function disassociateRouteTable(DisassociateRouteTableRequest $args)
    {
        parent::disassociateRouteTable($args->toArray());
    }
}
