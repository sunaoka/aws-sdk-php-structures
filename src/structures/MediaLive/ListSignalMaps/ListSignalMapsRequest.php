<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListSignalMaps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CloudWatchAlarmTemplateGroupIdentifier
 * @property string $EventBridgeRuleTemplateGroupIdentifier
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class ListSignalMapsRequest extends Request
{
    /**
     * @param array{
     *     CloudWatchAlarmTemplateGroupIdentifier?: string,
     *     EventBridgeRuleTemplateGroupIdentifier?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
