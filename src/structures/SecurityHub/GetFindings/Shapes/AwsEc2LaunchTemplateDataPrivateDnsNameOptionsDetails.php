<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableResourceNameDnsAAAARecord
 * @property bool $EnableResourceNameDnsARecord
 * @property string $HostnameType
 */
class AwsEc2LaunchTemplateDataPrivateDnsNameOptionsDetails extends Shape
{
    /**
     * @param array{
     *     EnableResourceNameDnsAAAARecord?: bool,
     *     EnableResourceNameDnsARecord?: bool,
     *     HostnameType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
