<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplateGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $Scope
 * @property string $SignalMapIdentifier
 */
class ListCloudWatchAlarmTemplateGroupsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Scope?: string,
     *     SignalMapIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
