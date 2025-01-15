<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceProfileId
 * @property string|null $VoiceProfileArn
 * @property string|null $VoiceProfileDomainId
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ExpirationTimestamp
 */
class VoiceProfile extends Shape
{
    /**
     * @param array{
     *     VoiceProfileId?: string|null,
     *     VoiceProfileArn?: string|null,
     *     VoiceProfileDomainId?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ExpirationTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
