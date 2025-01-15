<?php

namespace Sunaoka\Aws\Structures\Macie2\CreateFindingsFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, CriterionAdditionalProperties>|null $criterion
 */
class FindingCriteria extends Shape
{
    /**
     * @param array{criterion?: array<string, CriterionAdditionalProperties>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
