<?php

namespace Sunaoka\Aws\Structures\Pipes\CreatePipe\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GPU'|'MEMORY'|'VCPU' $Type
 * @property string $Value
 */
class BatchResourceRequirement extends Shape
{
    /**
     * @param array{
     *     Type: 'GPU'|'MEMORY'|'VCPU',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
