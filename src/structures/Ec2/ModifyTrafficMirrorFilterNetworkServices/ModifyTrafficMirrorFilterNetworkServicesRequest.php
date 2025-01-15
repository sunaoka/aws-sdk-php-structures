<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorFilterNetworkServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterId
 * @property list<'amazon-dns'>|null $AddNetworkServices
 * @property list<'amazon-dns'>|null $RemoveNetworkServices
 * @property bool|null $DryRun
 */
class ModifyTrafficMirrorFilterNetworkServicesRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterId: string,
     *     AddNetworkServices?: list<'amazon-dns'>|null,
     *     RemoveNetworkServices?: list<'amazon-dns'>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
