<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceProfileId
 * @property string $VoiceProfileArn
 * @property string $VoiceProfileDomainId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult $ExpirationTimestamp
 */
class VoiceProfile extends Shape
{
    /**
     * @param array{
     *     VoiceProfileId?: string,
     *     VoiceProfileArn?: string,
     *     VoiceProfileDomainId?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ExpirationTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
