<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $active
 * @property list<ConditionalBranch> $conditionalBranches
 * @property DefaultConditionalBranch $defaultBranch
 */
class ConditionalSpecification extends Shape
{
    /**
     * @param array{
     *     active: bool,
     *     conditionalBranches: list<ConditionalBranch>,
     *     defaultBranch: DefaultConditionalBranch
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
