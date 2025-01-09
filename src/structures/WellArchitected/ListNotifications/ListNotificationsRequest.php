<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $ResourceArn
 */
class ListNotificationsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId?: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
