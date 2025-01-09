<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DetachTrafficSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property list<Shapes\TrafficSourceIdentifier> $TrafficSources
 */
class DetachTrafficSourcesRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     TrafficSources: list<Shapes\TrafficSourceIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
