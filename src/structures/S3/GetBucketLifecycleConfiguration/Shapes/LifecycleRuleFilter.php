<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketLifecycleConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Prefix
 * @property Tag $Tag
 * @property int $ObjectSizeGreaterThan
 * @property int $ObjectSizeLessThan
 * @property LifecycleRuleAndOperator $And
 */
class LifecycleRuleFilter extends Shape
{
    /**
     * @param array{
     *     Prefix?: string,
     *     Tag?: Tag,
     *     ObjectSizeGreaterThan?: int,
     *     ObjectSizeLessThan?: int,
     *     And?: LifecycleRuleAndOperator
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
