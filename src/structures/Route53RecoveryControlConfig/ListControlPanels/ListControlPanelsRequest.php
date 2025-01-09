<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryControlConfig\ListControlPanels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListControlPanelsRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
