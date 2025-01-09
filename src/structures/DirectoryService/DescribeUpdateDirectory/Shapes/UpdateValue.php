<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeUpdateDirectory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OSUpdateSettings $OSUpdateSettings
 */
class UpdateValue extends Shape
{
    /**
     * @param array{OSUpdateSettings?: OSUpdateSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
