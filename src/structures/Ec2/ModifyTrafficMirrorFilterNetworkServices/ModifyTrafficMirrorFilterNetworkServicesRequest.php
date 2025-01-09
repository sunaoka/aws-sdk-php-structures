<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTrafficMirrorFilterNetworkServices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficMirrorFilterId
 * @property list<'amazon-dns'> $AddNetworkServices
 * @property list<'amazon-dns'> $RemoveNetworkServices
 * @property bool $DryRun
 */
class ModifyTrafficMirrorFilterNetworkServicesRequest extends Request
{
    /**
     * @param array{
     *     TrafficMirrorFilterId: string,
     *     AddNetworkServices?: list<'amazon-dns'>,
     *     RemoveNetworkServices?: list<'amazon-dns'>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
