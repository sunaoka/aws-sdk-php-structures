<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $NetworkInterfaceIds
 * @property list<string>|null $SecurityGroupIds
 * @property list<string>|null $SubnetIds
 */
class VpcOutputSettingsDescription extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>|null,
     *     NetworkInterfaceIds?: list<string>|null,
     *     SecurityGroupIds?: list<string>|null,
     *     SubnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
