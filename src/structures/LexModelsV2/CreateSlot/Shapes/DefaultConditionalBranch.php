<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DialogState|null $nextStep
 * @property ResponseSpecification|null $response
 */
class DefaultConditionalBranch extends Shape
{
    /**
     * @param array{
     *     nextStep?: DialogState|null,
     *     response?: ResponseSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
