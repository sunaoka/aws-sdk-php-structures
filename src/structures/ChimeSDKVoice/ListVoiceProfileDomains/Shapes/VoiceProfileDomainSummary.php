<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListVoiceProfileDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceProfileDomainId
 * @property string $VoiceProfileDomainArn
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class VoiceProfileDomainSummary extends Shape
{
    /**
     * @param array{
     *     VoiceProfileDomainId?: string,
     *     VoiceProfileDomainArn?: string,
     *     Name?: string,
     *     Description?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
