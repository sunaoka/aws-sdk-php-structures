<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AvailabilityZoneCount
 */
class AwsOpenSearchServiceDomainClusterConfigZoneAwarenessConfigDetails extends Shape
{
    /**
     * @param array{AvailabilityZoneCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
