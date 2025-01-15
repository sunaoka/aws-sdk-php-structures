<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryCluster\ListRoutingControls;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ControlPanelArn
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 */
class ListRoutingControlsRequest extends Request
{
    /**
     * @param array{
     *     ControlPanelArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
