<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetVoiceToneAnalysisTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VoiceConnectorId
 * @property string $TransactionId
 * @property bool $IsCaller
 */
class CallDetails extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId?: string,
     *     TransactionId?: string,
     *     IsCaller?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
