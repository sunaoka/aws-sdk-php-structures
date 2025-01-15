<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOutposts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutpostId
 * @property string|null $OwnerId
 * @property string|null $OutpostArn
 * @property string|null $SiteId
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $LifeCycleStatus
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property array<string, string>|null $Tags
 * @property string|null $SiteArn
 * @property 'RACK'|'SERVER'|null $SupportedHardwareType
 */
class Outpost extends Shape
{
    /**
     * @param array{
     *     OutpostId?: string|null,
     *     OwnerId?: string|null,
     *     OutpostArn?: string|null,
     *     SiteId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     LifeCycleStatus?: string|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Tags?: array<string, string>|null,
     *     SiteArn?: string|null,
     *     SupportedHardwareType?: 'RACK'|'SERVER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
