<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOutpost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property string $SiteId
 * @property string $AvailabilityZone
 * @property string $AvailabilityZoneId
 * @property array<string, string> $Tags
 * @property 'RACK'|'SERVER' $SupportedHardwareType
 */
class CreateOutpostRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     SiteId: string,
     *     AvailabilityZone?: string,
     *     AvailabilityZoneId?: string,
     *     Tags?: array<string, string>,
     *     SupportedHardwareType?: 'RACK'|'SERVER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
