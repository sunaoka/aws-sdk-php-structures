<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property Tag|null $Tag
 * @property int|null $ObjectSizeGreaterThan
 * @property int|null $ObjectSizeLessThan
 * @property LifecycleRuleAndOperator|null $And
 */
class LifecycleRuleFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Tag?: Tag|null,
     *     ObjectSizeGreaterThan?: int|null,
     *     ObjectSizeLessThan?: int|null,
     *     And?: LifecycleRuleAndOperator|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
