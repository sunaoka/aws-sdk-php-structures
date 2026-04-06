<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $WorkloadId
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 * @property string|null $ResourceArn
 */
class ListNotificationsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null,
     *     ResourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
