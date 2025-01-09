<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShareInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $resourceShareInvitationArns
 * @property list<string> $resourceShareArns
 * @property string $nextToken
 * @property int<1, 500> $maxResults
 */
class GetResourceShareInvitationsRequest extends Request
{
    /**
     * @param array{
     *     resourceShareInvitationArns?: list<string>,
     *     resourceShareArns?: list<string>,
     *     nextToken?: string,
     *     maxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
