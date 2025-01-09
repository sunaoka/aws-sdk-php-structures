<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowsPublicReadAccess
 * @property bool $AllowsPublicWriteAccess
 */
class BucketPolicy extends Shape
{
    /**
     * @param array{
     *     AllowsPublicReadAccess?: bool,
     *     AllowsPublicWriteAccess?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
