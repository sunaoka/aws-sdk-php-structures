<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateOutpost;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $SiteId
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property array<string, string>|null $Tags
 * @property 'RACK'|'SERVER'|null $SupportedHardwareType
 */
class CreateOutpostRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     SiteId: string,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     Tags?: array<string, string>|null,
     *     SupportedHardwareType?: 'RACK'|'SERVER'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
