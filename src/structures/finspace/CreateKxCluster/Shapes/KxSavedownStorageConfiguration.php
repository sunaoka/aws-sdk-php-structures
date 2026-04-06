<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SDS01'|null $type
 * @property int<10, 16000>|null $size
 * @property string|null $volumeName
 */
class KxSavedownStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'SDS01'|null,
     *     size?: int<10, 16000>|null,
     *     volumeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
