<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateVoiceProfileDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceProfileDomainId
 * @property string|null $VoiceProfileDomainArn
 * @property string|null $Name
 * @property string|null $Description
 * @property ServerSideEncryptionConfiguration|null $ServerSideEncryptionConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class VoiceProfileDomain extends Shape
{
    /**
     * @param array{
     *     VoiceProfileDomainId?: string|null,
     *     VoiceProfileDomainArn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ServerSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
