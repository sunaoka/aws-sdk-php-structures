<?php

namespace Sunaoka\Aws\Structures\S3Control\GetMultiRegionAccessPoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $BlockPublicAcls
 * @property bool|null $IgnorePublicAcls
 * @property bool|null $BlockPublicPolicy
 * @property bool|null $RestrictPublicBuckets
 */
class PublicAccessBlockConfiguration extends Shape
{
    /**
     * @param array{
     *     BlockPublicAcls?: bool|null,
     *     IgnorePublicAcls?: bool|null,
     *     BlockPublicPolicy?: bool|null,
     *     RestrictPublicBuckets?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
