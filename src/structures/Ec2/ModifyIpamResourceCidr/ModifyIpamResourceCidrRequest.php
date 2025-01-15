<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyIpamResourceCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $ResourceId
 * @property string $ResourceCidr
 * @property string $ResourceRegion
 * @property string $CurrentIpamScopeId
 * @property string|null $DestinationIpamScopeId
 * @property bool $Monitored
 */
class ModifyIpamResourceCidrRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ResourceId: string,
     *     ResourceCidr: string,
     *     ResourceRegion: string,
     *     CurrentIpamScopeId: string,
     *     DestinationIpamScopeId?: string|null,
     *     Monitored: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
