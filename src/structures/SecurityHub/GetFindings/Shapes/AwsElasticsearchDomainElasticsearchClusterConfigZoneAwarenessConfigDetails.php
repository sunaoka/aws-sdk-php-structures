<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AvailabilityZoneCount
 */
class AwsElasticsearchDomainElasticsearchClusterConfigZoneAwarenessConfigDetails extends Shape
{
    /**
     * @param array{AvailabilityZoneCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
