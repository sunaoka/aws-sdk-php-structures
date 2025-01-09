<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification $successResponse
 * @property ResponseSpecification $failureResponse
 * @property ResponseSpecification $timeoutResponse
 * @property DialogState $successNextStep
 * @property ConditionalSpecification $successConditional
 * @property DialogState $failureNextStep
 * @property ConditionalSpecification $failureConditional
 * @property DialogState $timeoutNextStep
 * @property ConditionalSpecification $timeoutConditional
 */
class PostFulfillmentStatusSpecification extends Shape
{
    /**
     * @param array{
     *     successResponse?: ResponseSpecification,
     *     failureResponse?: ResponseSpecification,
     *     timeoutResponse?: ResponseSpecification,
     *     successNextStep?: DialogState,
     *     successConditional?: ConditionalSpecification,
     *     failureNextStep?: DialogState,
     *     failureConditional?: ConditionalSpecification,
     *     timeoutNextStep?: DialogState,
     *     timeoutConditional?: ConditionalSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
