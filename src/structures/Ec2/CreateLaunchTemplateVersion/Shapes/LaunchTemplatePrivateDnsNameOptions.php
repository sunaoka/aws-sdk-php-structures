<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ip-name'|'resource-name' $HostnameType
 * @property bool $EnableResourceNameDnsARecord
 * @property bool $EnableResourceNameDnsAAAARecord
 */
class LaunchTemplatePrivateDnsNameOptions extends Shape
{
    /**
     * @param array{
     *     HostnameType?: 'ip-name'|'resource-name',
     *     EnableResourceNameDnsARecord?: bool,
     *     EnableResourceNameDnsAAAARecord?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
