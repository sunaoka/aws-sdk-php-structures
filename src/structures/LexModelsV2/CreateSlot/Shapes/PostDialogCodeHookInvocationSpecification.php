<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification|null $successResponse
 * @property DialogState|null $successNextStep
 * @property ConditionalSpecification|null $successConditional
 * @property ResponseSpecification|null $failureResponse
 * @property DialogState|null $failureNextStep
 * @property ConditionalSpecification|null $failureConditional
 * @property ResponseSpecification|null $timeoutResponse
 * @property DialogState|null $timeoutNextStep
 * @property ConditionalSpecification|null $timeoutConditional
 */
class PostDialogCodeHookInvocationSpecification extends Shape
{
    /**
     * @param array{
     *     successResponse?: ResponseSpecification|null,
     *     successNextStep?: DialogState|null,
     *     successConditional?: ConditionalSpecification|null,
     *     failureResponse?: ResponseSpecification|null,
     *     failureNextStep?: DialogState|null,
     *     failureConditional?: ConditionalSpecification|null,
     *     timeoutResponse?: ResponseSpecification|null,
     *     timeoutNextStep?: DialogState|null,
     *     timeoutConditional?: ConditionalSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
