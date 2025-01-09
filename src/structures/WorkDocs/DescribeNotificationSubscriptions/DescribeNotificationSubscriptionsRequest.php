<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeNotificationSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $Marker
 * @property int $Limit
 */
class DescribeNotificationSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Marker?: string,
     *     Limit?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
