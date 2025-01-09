<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListEventBridgeRuleTemplateGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $SignalMapIdentifier
 */
class ListEventBridgeRuleTemplateGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     SignalMapIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
