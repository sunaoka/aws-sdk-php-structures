<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InputFilter
 * @property string $OutputFilter
 * @property 'Input'|'None' $JoinSource
 */
class DataProcessing extends Shape
{
    /**
     * @param array{
     *     InputFilter?: string,
     *     OutputFilter?: string,
     *     JoinSource?: 'Input'|'None'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
