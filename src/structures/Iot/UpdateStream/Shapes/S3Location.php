<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bucket
 * @property string|null $key
 * @property string|null $version
 */
class S3Location extends Shape
{
    /**
     * @param array{
     *     bucket?: string|null,
     *     key?: string|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
