<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyPrivateDnsNameOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InstanceId
 * @property 'ip-name'|'resource-name'|null $PrivateDnsHostnameType
 * @property bool|null $EnableResourceNameDnsARecord
 * @property bool|null $EnableResourceNameDnsAAAARecord
 */
class ModifyPrivateDnsNameOptionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceId: string,
     *     PrivateDnsHostnameType?: 'ip-name'|'resource-name'|null,
     *     EnableResourceNameDnsARecord?: bool|null,
     *     EnableResourceNameDnsAAAARecord?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
