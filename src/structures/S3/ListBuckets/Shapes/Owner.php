<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DisplayName
 * @property string $ID
 */
class Owner extends Shape
{
    /**
     * @param array{
     *     DisplayName?: string,
     *     ID?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
