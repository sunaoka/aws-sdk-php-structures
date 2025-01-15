<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableResourceNameDnsAAAARecord
 * @property bool|null $EnableResourceNameDnsARecord
 * @property string|null $HostnameType
 */
class AwsEc2LaunchTemplateDataPrivateDnsNameOptionsDetails extends Shape
{
    /**
     * @param array{
     *     EnableResourceNameDnsAAAARecord?: bool|null,
     *     EnableResourceNameDnsARecord?: bool|null,
     *     HostnameType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
