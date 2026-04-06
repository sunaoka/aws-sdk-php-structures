<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListSignalMaps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CloudWatchAlarmTemplateGroupIdentifier
 * @property string|null $EventBridgeRuleTemplateGroupIdentifier
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class ListSignalMapsRequest extends Request
{
    /**
     * @param array{
     *     CloudWatchAlarmTemplateGroupIdentifier?: string|null,
     *     EventBridgeRuleTemplateGroupIdentifier?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
