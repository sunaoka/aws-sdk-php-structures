<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowsPublicReadAccess
 * @property bool|null $AllowsPublicWriteAccess
 */
class BucketPolicy extends Shape
{
    /**
     * @param array{
     *     AllowsPublicReadAccess?: bool|null,
     *     AllowsPublicWriteAccess?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
