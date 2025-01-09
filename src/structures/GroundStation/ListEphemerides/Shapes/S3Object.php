<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListEphemerides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucket
 * @property string $key
 * @property string $version
 */
class S3Object extends Shape
{
    /**
     * @param array{
     *     bucket?: string,
     *     key?: string,
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
