<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $BlockPublicAcls
 * @property bool $BlockPublicPolicy
 * @property bool $IgnorePublicAcls
 * @property bool $RestrictPublicBuckets
 */
class AwsS3AccountPublicAccessBlockDetails extends Shape
{
    /**
     * @param array{
     *     BlockPublicAcls?: bool,
     *     BlockPublicPolicy?: bool,
     *     IgnorePublicAcls?: bool,
     *     RestrictPublicBuckets?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
