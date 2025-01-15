<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $NetworkInterfaceId
 * @property 'description'|'groupSet'|'sourceDestCheck'|'attachment'|'associatePublicIpAddress'|null $Attribute
 */
class DescribeNetworkInterfaceAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NetworkInterfaceId: string,
     *     Attribute?: 'description'|'groupSet'|'sourceDestCheck'|'attachment'|'associatePublicIpAddress'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
