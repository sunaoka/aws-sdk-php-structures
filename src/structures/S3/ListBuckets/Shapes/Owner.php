<?php

namespace Sunaoka\Aws\Structures\S3\ListBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DisplayName
 * @property string|null $ID
 */
class Owner extends Shape
{
    /**
     * @param array{
     *     DisplayName?: string|null,
     *     ID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
