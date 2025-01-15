<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundVoiceContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableAnswerMachineDetection
 * @property bool|null $AwaitAnswerMachinePrompt
 */
class AnswerMachineDetectionConfig extends Shape
{
    /**
     * @param array{
     *     EnableAnswerMachineDetection?: bool|null,
     *     AwaitAnswerMachinePrompt?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
