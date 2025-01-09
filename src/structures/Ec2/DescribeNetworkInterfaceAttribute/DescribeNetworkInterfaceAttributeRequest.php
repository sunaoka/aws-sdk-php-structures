<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NetworkInterfaceId
 * @property 'description'|'groupSet'|'sourceDestCheck'|'attachment'|'associatePublicIpAddress' $Attribute
 */
class DescribeNetworkInterfaceAttributeRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NetworkInterfaceId: string,
     *     Attribute?: 'description'|'groupSet'|'sourceDestCheck'|'attachment'|'associatePublicIpAddress'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
