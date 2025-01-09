<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOutpost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutpostId
 * @property string $OwnerId
 * @property string $OutpostArn
 * @property string $SiteId
 * @property string $Name
 * @property string $Description
 * @property string $LifeCycleStatus
 * @property string $AvailabilityZone
 * @property string $AvailabilityZoneId
 * @property array<string, string> $Tags
 * @property string $SiteArn
 * @property 'RACK'|'SERVER' $SupportedHardwareType
 */
class Outpost extends Shape
{
    /**
     * @param array{
     *     OutpostId?: string,
     *     OwnerId?: string,
     *     OutpostArn?: string,
     *     SiteId?: string,
     *     Name?: string,
     *     Description?: string,
     *     LifeCycleStatus?: string,
     *     AvailabilityZone?: string,
     *     AvailabilityZoneId?: string,
     *     Tags?: array<string, string>,
     *     SiteArn?: string,
     *     SupportedHardwareType?: 'RACK'|'SERVER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
