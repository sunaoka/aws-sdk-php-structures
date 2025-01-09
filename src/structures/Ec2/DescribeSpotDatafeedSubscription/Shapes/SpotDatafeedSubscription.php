<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotDatafeedSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Bucket
 * @property SpotInstanceStateFault $Fault
 * @property string $OwnerId
 * @property string $Prefix
 * @property 'Active'|'Inactive' $State
 */
class SpotDatafeedSubscription extends Shape
{
    /**
     * @param array{
     *     Bucket?: string,
     *     Fault?: SpotInstanceStateFault,
     *     OwnerId?: string,
     *     Prefix?: string,
     *     State?: 'Active'|'Inactive'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
