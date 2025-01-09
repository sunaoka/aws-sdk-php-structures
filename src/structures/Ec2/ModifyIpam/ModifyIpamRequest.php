<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpam;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamId
 * @property string $Description
 * @property list<Shapes\AddIpamOperatingRegion> $AddOperatingRegions
 * @property list<Shapes\RemoveIpamOperatingRegion> $RemoveOperatingRegions
 * @property 'free'|'advanced' $Tier
 * @property bool $EnablePrivateGua
 */
class ModifyIpamRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamId: string,
     *     Description?: string,
     *     AddOperatingRegions?: list<Shapes\AddIpamOperatingRegion>,
     *     RemoveOperatingRegions?: list<Shapes\RemoveIpamOperatingRegion>,
     *     Tier?: 'free'|'advanced',
     *     EnablePrivateGua?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
