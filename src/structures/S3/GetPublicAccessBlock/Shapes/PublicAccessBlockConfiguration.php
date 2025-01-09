<?php

namespace Sunaoka\Aws\Structures\S3\GetPublicAccessBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $BlockPublicAcls
 * @property bool $IgnorePublicAcls
 * @property bool $BlockPublicPolicy
 * @property bool $RestrictPublicBuckets
 */
class PublicAccessBlockConfiguration extends Shape
{
    /**
     * @param array{
     *     BlockPublicAcls?: bool,
     *     IgnorePublicAcls?: bool,
     *     BlockPublicPolicy?: bool,
     *     RestrictPublicBuckets?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
