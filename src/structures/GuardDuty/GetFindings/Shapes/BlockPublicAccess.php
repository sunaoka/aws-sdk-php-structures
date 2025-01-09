<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $IgnorePublicAcls
 * @property bool $RestrictPublicBuckets
 * @property bool $BlockPublicAcls
 * @property bool $BlockPublicPolicy
 */
class BlockPublicAccess extends Shape
{
    /**
     * @param array{
     *     IgnorePublicAcls?: bool,
     *     RestrictPublicBuckets?: bool,
     *     BlockPublicAcls?: bool,
     *     BlockPublicPolicy?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
