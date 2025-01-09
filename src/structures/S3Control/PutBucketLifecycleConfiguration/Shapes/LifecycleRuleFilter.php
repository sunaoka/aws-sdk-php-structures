<?php

namespace Sunaoka\Aws\Structures\S3Control\PutBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property S3Tag $Tag
 * @property LifecycleRuleAndOperator $And
 * @property int $ObjectSizeGreaterThan
 * @property int $ObjectSizeLessThan
 */
class LifecycleRuleFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tag?: S3Tag,
     *     And?: LifecycleRuleAndOperator,
     *     ObjectSizeGreaterThan?: int,
     *     ObjectSizeLessThan?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
