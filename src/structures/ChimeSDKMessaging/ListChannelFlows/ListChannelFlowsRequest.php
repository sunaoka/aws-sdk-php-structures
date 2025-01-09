<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelFlows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListChannelFlowsRequest extends Request
{
    /**
     * @param array{
     *     AppInstanceArn: string,
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
