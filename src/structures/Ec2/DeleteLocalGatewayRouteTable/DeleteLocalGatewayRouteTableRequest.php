<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLocalGatewayRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableId
 * @property bool|null $DryRun
 */
class DeleteLocalGatewayRouteTableRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
