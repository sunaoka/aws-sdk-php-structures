<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeNotificationSubscriptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string|null $Marker
 * @property int<1, 999>|null $Limit
 */
class DescribeNotificationSubscriptionsRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     Marker?: string|null,
     *     Limit?: int<1, 999>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
