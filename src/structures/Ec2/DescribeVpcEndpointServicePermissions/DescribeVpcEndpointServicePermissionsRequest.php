<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServicePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ServiceId
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeVpcEndpointServicePermissionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceId: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
