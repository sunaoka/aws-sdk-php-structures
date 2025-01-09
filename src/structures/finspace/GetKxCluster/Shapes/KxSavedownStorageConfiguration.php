<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SDS01' $type
 * @property int $size
 * @property string $volumeName
 */
class KxSavedownStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'SDS01',
     *     size?: int,
     *     volumeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
