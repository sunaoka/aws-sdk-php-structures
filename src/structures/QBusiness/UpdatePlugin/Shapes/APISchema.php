<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdatePlugin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $payload
 * @property S3 $s3
 */
class APISchema extends Shape
{
    /**
     * @param array{
     *     payload?: string,
     *     s3?: S3
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
