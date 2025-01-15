<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupIdentifier
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Scope
 * @property string|null $SignalMapIdentifier
 */
class ListCloudWatchAlarmTemplatesRequest extends Request
{
    /**
     * @param array{
     *     GroupIdentifier?: string|null,
     *     MaxResults?: int<1, 1000>|null,
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
