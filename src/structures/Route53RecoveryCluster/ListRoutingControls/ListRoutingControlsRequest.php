<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\ListRoutingControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ControlPanelArn
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListRoutingControlsRequest extends Request
{
    /**
     * @param array{
     *     ControlPanelArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
