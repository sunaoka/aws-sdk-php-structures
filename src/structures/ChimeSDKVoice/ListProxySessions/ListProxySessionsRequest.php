<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListProxySessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property 'Open'|'InProgress'|'Closed' $Status
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListProxySessionsRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Status?: 'Open'|'InProgress'|'Closed',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
