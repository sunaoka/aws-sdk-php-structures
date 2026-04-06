<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logic
 * @property string|null $naturalLanguage
 */
class AutomatedReasoningLogicStatement extends Shape
{
    /**
     * @param array{
     *     logic: string,
     *     naturalLanguage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
