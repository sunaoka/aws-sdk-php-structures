<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupIdentifier
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Scope
 * @property string|null $SignalMapIdentifier
 */
class ListCloudWatchAlarmTemplatesRequest extends Request
{
    /**
     * @param array{
     *     GroupIdentifier?: string|null,
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
