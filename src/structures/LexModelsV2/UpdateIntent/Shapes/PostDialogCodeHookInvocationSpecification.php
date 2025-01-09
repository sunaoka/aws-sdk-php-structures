<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification $successResponse
 * @property DialogState $successNextStep
 * @property ConditionalSpecification $successConditional
 * @property ResponseSpecification $failureResponse
 * @property DialogState $failureNextStep
 * @property ConditionalSpecification $failureConditional
 * @property ResponseSpecification $timeoutResponse
 * @property DialogState $timeoutNextStep
 * @property ConditionalSpecification $timeoutConditional
 */
class PostDialogCodeHookInvocationSpecification extends Shape
{
    /**
     * @param array{
     *     successResponse?: ResponseSpecification,
     *     successNextStep?: DialogState,
     *     successConditional?: ConditionalSpecification,
     *     failureResponse?: ResponseSpecification,
     *     failureNextStep?: DialogState,
     *     failureConditional?: ConditionalSpecification,
     *     timeoutResponse?: ResponseSpecification,
     *     timeoutNextStep?: DialogState,
     *     timeoutConditional?: ConditionalSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
