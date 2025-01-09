<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointConnectionNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ConnectionNotificationId
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeVpcEndpointConnectionNotificationsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ConnectionNotificationId?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
