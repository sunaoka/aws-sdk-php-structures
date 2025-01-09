<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $allowsPublicReadAccess
 * @property bool $allowsPublicWriteAccess
 */
class BucketPolicy extends Shape
{
    /**
     * @param array{
     *     allowsPublicReadAccess?: bool,
     *     allowsPublicWriteAccess?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
