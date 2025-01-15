<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListSignalMaps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CloudWatchAlarmTemplateGroupIdentifier
 * @property string|null $EventBridgeRuleTemplateGroupIdentifier
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSignalMapsRequest extends Request
{
    /**
     * @param array{
     *     CloudWatchAlarmTemplateGroupIdentifier?: string|null,
     *     EventBridgeRuleTemplateGroupIdentifier?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
