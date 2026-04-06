<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListEventBridgeRuleTemplateGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $SignalMapIdentifier
 */
class ListEventBridgeRuleTemplateGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     SignalMapIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
