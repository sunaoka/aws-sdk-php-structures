<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeScalingParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'search.m1.small'|'search.m1.large'|'search.m2.xlarge'|'search.m2.2xlarge'|'search.m3.medium'|'search.m3.large'|'search.m3.xlarge'|'search.m3.2xlarge'|'search.small'|'search.medium'|'search.large'|'search.xlarge'|'search.2xlarge'|'search.previousgeneration.small'|'search.previousgeneration.large'|'search.previousgeneration.xlarge'|'search.previousgeneration.2xlarge'|null $DesiredInstanceType
 * @property int<0, max>|null $DesiredReplicationCount
 * @property int<0, max>|null $DesiredPartitionCount
 */
class ScalingParameters extends Shape
{
    /**
     * @param array{
     *     DesiredInstanceType?: 'search.m1.small'|'search.m1.large'|'search.m2.xlarge'|'search.m2.2xlarge'|'search.m3.medium'|'search.m3.large'|'search.m3.xlarge'|'search.m3.2xlarge'|'search.small'|'search.medium'|'search.large'|'search.xlarge'|'search.2xlarge'|'search.previousgeneration.small'|'search.previousgeneration.large'|'search.previousgeneration.xlarge'|'search.previousgeneration.2xlarge'|null,
     *     DesiredReplicationCount?: int<0, max>|null,
     *     DesiredPartitionCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
