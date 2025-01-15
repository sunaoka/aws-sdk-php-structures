<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceProfiles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceProfileDomainId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListVoiceProfilesRequest extends Request
{
    /**
     * @param array{
     *     VoiceProfileDomainId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
