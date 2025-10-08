<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningLogicStatement>|null $statements
 */
class AutomatedReasoningCheckScenario extends Shape
{
    /**
     * @param array{statements?: list<AutomatedReasoningLogicStatement>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
