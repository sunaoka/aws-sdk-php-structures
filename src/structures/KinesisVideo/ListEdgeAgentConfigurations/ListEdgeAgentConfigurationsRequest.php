<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListEdgeAgentConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubDeviceArn
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListEdgeAgentConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     HubDeviceArn: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
