<?php

namespace Sunaoka\Aws\Structures\Evs\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InitialVlanInfo $vmkManagement
 * @property InitialVlanInfo $vmManagement
 * @property InitialVlanInfo $vMotion
 * @property InitialVlanInfo $vSan
 * @property InitialVlanInfo $vTep
 * @property InitialVlanInfo $edgeVTep
 * @property InitialVlanInfo $nsxUplink
 * @property InitialVlanInfo $hcx
 * @property InitialVlanInfo $expansionVlan1
 * @property InitialVlanInfo $expansionVlan2
 * @property bool|null $isHcxPublic
 * @property string|null $hcxNetworkAclId
 */
class InitialVlans extends Shape
{
    /**
     * @param array{
     *     vmkManagement: InitialVlanInfo,
     *     vmManagement: InitialVlanInfo,
     *     vMotion: InitialVlanInfo,
     *     vSan: InitialVlanInfo,
     *     vTep: InitialVlanInfo,
     *     edgeVTep: InitialVlanInfo,
     *     nsxUplink: InitialVlanInfo,
     *     hcx: InitialVlanInfo,
     *     expansionVlan1: InitialVlanInfo,
     *     expansionVlan2: InitialVlanInfo,
     *     isHcxPublic?: bool|null,
     *     hcxNetworkAclId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
