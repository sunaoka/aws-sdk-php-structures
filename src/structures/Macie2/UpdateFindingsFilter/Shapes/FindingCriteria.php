<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateFindingsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, CriterionAdditionalProperties> $criterion
 */
class FindingCriteria extends Shape
{
    /**
     * @param array{criterion?: array<string, CriterionAdditionalProperties>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
