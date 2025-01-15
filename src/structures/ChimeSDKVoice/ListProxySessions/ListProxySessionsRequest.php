<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListProxySessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property 'Open'|'InProgress'|'Closed'|null $Status
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListProxySessionsRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Status?: 'Open'|'InProgress'|'Closed'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
