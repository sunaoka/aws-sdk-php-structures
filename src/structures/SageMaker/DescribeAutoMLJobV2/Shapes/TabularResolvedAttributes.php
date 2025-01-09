<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAutoMLJobV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BinaryClassification'|'MulticlassClassification'|'Regression' $ProblemType
 */
class TabularResolvedAttributes extends Shape
{
    /**
     * @param array{ProblemType?: 'BinaryClassification'|'MulticlassClassification'|'Regression'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
