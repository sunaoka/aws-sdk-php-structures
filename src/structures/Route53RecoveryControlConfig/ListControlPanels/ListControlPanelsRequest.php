<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListControlPanels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterArn
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListControlPanelsRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
