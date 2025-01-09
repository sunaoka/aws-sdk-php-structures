<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property list<S3Tag> $Tags
 * @property int $ObjectSizeGreaterThan
 * @property int $ObjectSizeLessThan
 */
class LifecycleRuleAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tags?: list<S3Tag>,
     *     ObjectSizeGreaterThan?: int,
     *     ObjectSizeLessThan?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
