<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALWAYS_TRUE'|'ALWAYS_FALSE'|null $type
 * @property list<AutomatedReasoningLogicStatement>|null $premises
 * @property list<AutomatedReasoningLogicStatement>|null $claims
 */
class AutomatedReasoningCheckLogicWarning extends Shape
{
    /**
     * @param array{
     *     type?: 'ALWAYS_TRUE'|'ALWAYS_FALSE'|null,
     *     premises?: list<AutomatedReasoningLogicStatement>|null,
     *     claims?: list<AutomatedReasoningLogicStatement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
