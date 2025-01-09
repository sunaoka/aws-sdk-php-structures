<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateSlot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property Condition $condition
 * @property DialogState $nextStep
 * @property ResponseSpecification $response
 */
class ConditionalBranch extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     condition: Condition,
     *     nextStep: DialogState,
     *     response?: ResponseSpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
