<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSpotDatafeedSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Bucket
 * @property SpotInstanceStateFault|null $Fault
 * @property string|null $OwnerId
 * @property string|null $Prefix
 * @property 'Active'|'Inactive'|null $State
 */
class SpotDatafeedSubscription extends Shape
{
    /**
     * @param array{
     *     Bucket?: string|null,
     *     Fault?: SpotInstanceStateFault|null,
     *     OwnerId?: string|null,
     *     Prefix?: string|null,
     *     State?: 'Active'|'Inactive'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
