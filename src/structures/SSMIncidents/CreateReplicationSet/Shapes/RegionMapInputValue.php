<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateReplicationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $sseKmsKeyId
 */
class RegionMapInputValue extends Shape
{
    /**
     * @param array{sseKmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
