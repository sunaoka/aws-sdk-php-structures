<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfacePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $NetworkInterfacePermissionIds
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<5, 255> $MaxResults
 */
class DescribeNetworkInterfacePermissionsRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfacePermissionIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 255>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
