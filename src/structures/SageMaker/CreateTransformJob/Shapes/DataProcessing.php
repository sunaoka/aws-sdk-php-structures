<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateTransformJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputFilter
 * @property string|null $OutputFilter
 * @property 'Input'|'None'|null $JoinSource
 */
class DataProcessing extends Shape
{
    /**
     * @param array{
     *     InputFilter?: string|null,
     *     OutputFilter?: string|null,
     *     JoinSource?: 'Input'|'None'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
