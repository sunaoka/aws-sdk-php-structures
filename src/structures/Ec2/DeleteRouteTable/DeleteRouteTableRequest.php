<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $RouteTableId
 */
class DeleteRouteTableRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     RouteTableId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
