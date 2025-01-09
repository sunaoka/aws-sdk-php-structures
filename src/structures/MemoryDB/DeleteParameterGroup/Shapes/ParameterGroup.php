<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteParameterGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Family
 * @property string $Description
 * @property string $ARN
 */
class ParameterGroup extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Family?: string,
     *     Description?: string,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
