<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'description'|'groupSet'|'sourceDestCheck'|'attachment'|null $Attribute
 * @property bool|null $DryRun
 * @property string $NetworkInterfaceId
 */
class DescribeNetworkInterfaceAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attribute?: 'description'|'groupSet'|'sourceDestCheck'|'attachment'|null,
     *     DryRun?: bool|null,
     *     NetworkInterfaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
