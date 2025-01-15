<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression'|null $ProblemType
 */
class TabularResolvedAttributes extends Shape
{
    /**
     * @param array{ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
