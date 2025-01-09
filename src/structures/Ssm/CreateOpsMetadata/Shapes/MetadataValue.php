<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateOpsMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 */
class MetadataValue extends Shape
{
    /**
     * @param array{Value?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
