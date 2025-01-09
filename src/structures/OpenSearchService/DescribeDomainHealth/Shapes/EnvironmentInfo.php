<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AvailabilityZoneInfo> $AvailabilityZoneInformation
 */
class EnvironmentInfo extends Shape
{
    /**
     * @param array{AvailabilityZoneInformation?: list<AvailabilityZoneInfo>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
