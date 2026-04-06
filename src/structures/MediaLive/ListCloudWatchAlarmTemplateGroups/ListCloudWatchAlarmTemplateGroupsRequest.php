<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplateGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Scope
 * @property string|null $SignalMapIdentifier
 */
class ListCloudWatchAlarmTemplateGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     Scope?: string|null,
     *     SignalMapIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
