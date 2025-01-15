<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeUpdateDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OSUpdateSettings|null $OSUpdateSettings
 */
class UpdateValue extends Shape
{
    /**
     * @param array{OSUpdateSettings?: OSUpdateSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
