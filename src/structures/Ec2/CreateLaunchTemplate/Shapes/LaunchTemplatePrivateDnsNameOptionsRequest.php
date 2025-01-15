<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ip-name'|'resource-name'|null $HostnameType
 * @property bool|null $EnableResourceNameDnsARecord
 * @property bool|null $EnableResourceNameDnsAAAARecord
 */
class LaunchTemplatePrivateDnsNameOptionsRequest extends Shape
{
    /**
     * @param array{
     *     HostnameType?: 'ip-name'|'resource-name'|null,
     *     EnableResourceNameDnsARecord?: bool|null,
     *     EnableResourceNameDnsAAAARecord?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
