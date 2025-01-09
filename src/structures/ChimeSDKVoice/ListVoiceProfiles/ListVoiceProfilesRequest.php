<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileDomainId
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListVoiceProfilesRequest extends Request
{
    /**
     * @param array{
     *     VoiceProfileDomainId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
