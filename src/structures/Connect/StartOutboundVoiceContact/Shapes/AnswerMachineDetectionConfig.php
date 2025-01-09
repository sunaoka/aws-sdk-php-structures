<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundVoiceContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableAnswerMachineDetection
 * @property bool $AwaitAnswerMachinePrompt
 */
class AnswerMachineDetectionConfig extends Shape
{
    /**
     * @param array{
     *     EnableAnswerMachineDetection?: bool,
     *     AwaitAnswerMachinePrompt?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
