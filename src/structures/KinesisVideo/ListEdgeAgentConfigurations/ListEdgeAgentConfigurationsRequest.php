<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListEdgeAgentConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubDeviceArn
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextToken
 */
class ListEdgeAgentConfigurationsRequest extends Request
{
    /**
     * @param array{
     *     HubDeviceArn: string,
     *     MaxResults?: int<1, 10>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
