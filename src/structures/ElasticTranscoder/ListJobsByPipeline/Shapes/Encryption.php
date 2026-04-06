<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Mode
 * @property string|null $Key
 * @property string|null $KeyMd5
 * @property string|null $InitializationVector
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     Mode?: string|null,
     *     Key?: string|null,
     *     KeyMd5?: string|null,
     *     InitializationVector?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
