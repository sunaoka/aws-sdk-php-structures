<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfileNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $WorkloadId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListProfileNotificationsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
