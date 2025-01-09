<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property list<Tag> $Tags
 * @property int $ObjectSizeGreaterThan
 * @property int $ObjectSizeLessThan
 */
class LifecycleRuleAndOperator extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tags?: list<Tag>,
     *     ObjectSizeGreaterThan?: int,
     *     ObjectSizeLessThan?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
