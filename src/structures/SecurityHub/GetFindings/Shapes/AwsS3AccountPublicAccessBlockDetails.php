<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $BlockPublicAcls
 * @property bool|null $BlockPublicPolicy
 * @property bool|null $IgnorePublicAcls
 * @property bool|null $RestrictPublicBuckets
 */
class AwsS3AccountPublicAccessBlockDetails extends Shape
{
    /**
     * @param array{
     *     BlockPublicAcls?: bool|null,
     *     BlockPublicPolicy?: bool|null,
     *     IgnorePublicAcls?: bool|null,
     *     RestrictPublicBuckets?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
