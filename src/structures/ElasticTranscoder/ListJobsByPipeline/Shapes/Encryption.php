<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Mode
 * @property string $Key
 * @property string $KeyMd5
 * @property string $InitializationVector
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     Mode?: string,
     *     Key?: string,
     *     KeyMd5?: string,
     *     InitializationVector?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
