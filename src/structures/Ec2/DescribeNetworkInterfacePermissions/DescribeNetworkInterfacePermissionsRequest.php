<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfacePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $NetworkInterfacePermissionIds
 * @property list<Shapes\Filter>|null $Filters
 * @property string|null $NextToken
 * @property int<5, 255>|null $MaxResults
 */
class DescribeNetworkInterfacePermissionsRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfacePermissionIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 255>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
