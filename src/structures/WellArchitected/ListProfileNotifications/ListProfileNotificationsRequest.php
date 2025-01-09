<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfileNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListProfileNotificationsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
