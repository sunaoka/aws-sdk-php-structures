<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $IpamId
 * @property string|null $Description
 * @property list<Shapes\AddIpamOperatingRegion>|null $AddOperatingRegions
 * @property list<Shapes\RemoveIpamOperatingRegion>|null $RemoveOperatingRegions
 */
class ModifyIpamRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     IpamId: string,
     *     Description?: string|null,
     *     AddOperatingRegions?: list<Shapes\AddIpamOperatingRegion>|null,
     *     RemoveOperatingRegions?: list<Shapes\RemoveIpamOperatingRegion>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
