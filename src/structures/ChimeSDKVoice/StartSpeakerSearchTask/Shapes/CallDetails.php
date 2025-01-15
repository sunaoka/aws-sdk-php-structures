<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\StartSpeakerSearchTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VoiceConnectorId
 * @property string|null $TransactionId
 * @property bool|null $IsCaller
 */
class CallDetails extends Shape
{
    /**
     * @param array{
     *     VoiceConnectorId?: string|null,
     *     TransactionId?: string|null,
     *     IsCaller?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
