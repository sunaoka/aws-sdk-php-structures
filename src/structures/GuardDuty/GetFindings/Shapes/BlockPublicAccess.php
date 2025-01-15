<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $IgnorePublicAcls
 * @property bool|null $RestrictPublicBuckets
 * @property bool|null $BlockPublicAcls
 * @property bool|null $BlockPublicPolicy
 */
class BlockPublicAccess extends Shape
{
    /**
     * @param array{
     *     IgnorePublicAcls?: bool|null,
     *     RestrictPublicBuckets?: bool|null,
     *     BlockPublicAcls?: bool|null,
     *     BlockPublicPolicy?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
