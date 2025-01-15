<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointConnectionNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ConnectionNotificationId
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeVpcEndpointConnectionNotificationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ConnectionNotificationId?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
