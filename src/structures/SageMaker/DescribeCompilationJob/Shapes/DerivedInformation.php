<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCompilationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DerivedDataInputConfig
 */
class DerivedInformation extends Shape
{
    /**
     * @param array{DerivedDataInputConfig?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
