<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $allowsPublicReadAccess
 * @property bool|null $allowsPublicWriteAccess
 */
class BucketPolicy extends Shape
{
    /**
     * @param array{
     *     allowsPublicReadAccess?: bool|null,
     *     allowsPublicWriteAccess?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
