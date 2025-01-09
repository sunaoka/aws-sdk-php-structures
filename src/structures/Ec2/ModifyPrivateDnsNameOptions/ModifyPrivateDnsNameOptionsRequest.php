<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyPrivateDnsNameOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $InstanceId
 * @property 'ip-name'|'resource-name' $PrivateDnsHostnameType
 * @property bool $EnableResourceNameDnsARecord
 * @property bool $EnableResourceNameDnsAAAARecord
 */
class ModifyPrivateDnsNameOptionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     InstanceId: string,
     *     PrivateDnsHostnameType?: 'ip-name'|'resource-name',
     *     EnableResourceNameDnsARecord?: bool,
     *     EnableResourceNameDnsAAAARecord?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
