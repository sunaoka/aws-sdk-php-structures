<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $volumeName
 * @property 'NAS_1'|null $volumeType
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     volumeName?: string|null,
     *     volumeType?: 'NAS_1'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
