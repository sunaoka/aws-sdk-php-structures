<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AvailabilityZones
 * @property list<string> $NetworkInterfaceIds
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SubnetIds
 */
class VpcOutputSettingsDescription extends Shape
{
    /**
     * @param array{
     *     AvailabilityZones?: list<string>,
     *     NetworkInterfaceIds?: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     SubnetIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
