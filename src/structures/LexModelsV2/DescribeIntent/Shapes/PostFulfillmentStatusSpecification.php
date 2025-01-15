<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResponseSpecification|null $successResponse
 * @property ResponseSpecification|null $failureResponse
 * @property ResponseSpecification|null $timeoutResponse
 * @property DialogState|null $successNextStep
 * @property ConditionalSpecification|null $successConditional
 * @property DialogState|null $failureNextStep
 * @property ConditionalSpecification|null $failureConditional
 * @property DialogState|null $timeoutNextStep
 * @property ConditionalSpecification|null $timeoutConditional
 */
class PostFulfillmentStatusSpecification extends Shape
{
    /**
     * @param array{
     *     successResponse?: ResponseSpecification|null,
     *     failureResponse?: ResponseSpecification|null,
     *     timeoutResponse?: ResponseSpecification|null,
     *     successNextStep?: DialogState|null,
     *     successConditional?: ConditionalSpecification|null,
     *     failureNextStep?: DialogState|null,
     *     failureConditional?: ConditionalSpecification|null,
     *     timeoutNextStep?: DialogState|null,
     *     timeoutConditional?: ConditionalSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
