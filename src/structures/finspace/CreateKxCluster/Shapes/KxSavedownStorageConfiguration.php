<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SDS01' $type
 * @property int<4, 16000> $size
 */
class KxSavedownStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'SDS01',
     *     size: int<4, 16000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
