<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateReplicationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sseKmsKeyId
 */
class RegionMapInputValue extends Shape
{
    /**
     * @param array{sseKmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
