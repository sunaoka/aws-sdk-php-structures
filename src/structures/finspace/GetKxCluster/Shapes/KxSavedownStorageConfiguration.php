<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SDS01' $type
 * @property int<10, 16000> $size
 * @property string $volumeName
 */
class KxSavedownStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type?: 'SDS01',
     *     size?: int<10, 16000>,
     *     volumeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
