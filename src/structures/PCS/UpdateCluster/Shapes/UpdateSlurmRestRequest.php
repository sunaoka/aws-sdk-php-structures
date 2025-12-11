<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'STANDARD'|'NONE'|null $mode
 */
class UpdateSlurmRestRequest extends Shape
{
    /**
     * @param array{mode?: 'STANDARD'|'NONE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
