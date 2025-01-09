<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WorkloadId
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 * @property string $ResourceArn
 */
class ListNotificationsRequest extends Request
{
    /**
     * @param array{
     *     WorkloadId?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>,
     *     ResourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
