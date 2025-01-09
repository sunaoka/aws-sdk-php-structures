<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50> $MaxResults
 * @property string $NextToken
 */
class ListInvitationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 50>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
