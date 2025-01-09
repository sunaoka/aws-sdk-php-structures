<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceProfileDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceProfileDomainId
 * @property string $VoiceProfileDomainArn
 * @property string $Name
 * @property string $Description
 * @property ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class VoiceProfileDomain extends Shape
{
    /**
     * @param array{
     *     VoiceProfileDomainId?: string,
     *     VoiceProfileDomainArn?: string,
     *     Name?: string,
     *     Description?: string,
     *     ServerSideEncryptionConfiguration?: ServerSideEncryptionConfiguration,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
