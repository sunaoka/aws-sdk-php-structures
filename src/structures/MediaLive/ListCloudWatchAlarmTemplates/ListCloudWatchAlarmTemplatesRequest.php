<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListCloudWatchAlarmTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupIdentifier
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $Scope
 * @property string $SignalMapIdentifier
 */
class ListCloudWatchAlarmTemplatesRequest extends Request
{
    /**
     * @param array{
     *     GroupIdentifier?: string,
     *     MaxResults?: int<1, 1000>,
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
