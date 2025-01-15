<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdatePlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $payload
 * @property S3|null $s3
 */
class APISchema extends Shape
{
    /**
     * @param array{
     *     payload?: string|null,
     *     s3?: S3|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
