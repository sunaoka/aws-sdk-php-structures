<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $RouteTableId
 */
class DeleteRouteTableRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     RouteTableId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
