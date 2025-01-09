<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $volumeName
 * @property 'NAS_1' $volumeType
 */
class Volume extends Shape
{
    /**
     * @param array{
     *     volumeName?: string,
     *     volumeType?: 'NAS_1'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
