<?php

namespace Sunaoka\Aws\Structures\S3Control\GetBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property S3Tag|null $Tag
 * @property LifecycleRuleAndOperator|null $And
 * @property int|null $ObjectSizeGreaterThan
 * @property int|null $ObjectSizeLessThan
 */
class LifecycleRuleFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: S3Tag|null,
     *     And?: LifecycleRuleAndOperator|null,
     *     ObjectSizeGreaterThan?: int|null,
     *     ObjectSizeLessThan?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
