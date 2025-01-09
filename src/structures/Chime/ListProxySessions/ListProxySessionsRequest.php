<?php

namespace Sunaoka\Aws\Structures\Chime\ListProxySessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property 'Open'|'InProgress'|'Closed' $Status
 * @property string $NextToken
 * @property int<1, 99> $MaxResults
 */
class ListProxySessionsRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Status?: 'Open'|'InProgress'|'Closed',
     *     NextToken?: string,
     *     MaxResults?: int<1, 99>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
