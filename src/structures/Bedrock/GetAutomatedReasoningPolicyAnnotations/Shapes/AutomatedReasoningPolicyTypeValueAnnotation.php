<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyAnnotations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningPolicyAddTypeValue|null $addTypeValue
 * @property AutomatedReasoningPolicyUpdateTypeValue|null $updateTypeValue
 * @property AutomatedReasoningPolicyDeleteTypeValue|null $deleteTypeValue
 */
class AutomatedReasoningPolicyTypeValueAnnotation extends Shape
{
    /**
     * @param array{
     *     addTypeValue?: AutomatedReasoningPolicyAddTypeValue|null,
     *     updateTypeValue?: AutomatedReasoningPolicyUpdateTypeValue|null,
     *     deleteTypeValue?: AutomatedReasoningPolicyDeleteTypeValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
