<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DialogState $nextStep
 * @property ResponseSpecification $response
 */
class DefaultConditionalBranch extends Shape
{
    /**
     * @param array{
     *     nextStep?: DialogState,
     *     response?: ResponseSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
