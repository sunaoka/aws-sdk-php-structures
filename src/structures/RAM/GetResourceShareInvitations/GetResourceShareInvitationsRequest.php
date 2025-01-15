<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShareInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $resourceShareInvitationArns
 * @property list<string>|null $resourceShareArns
 * @property string|null $nextToken
 * @property int<1, 500>|null $maxResults
 */
class GetResourceShareInvitationsRequest extends Request
{
    /**
     * @param array{
     *     resourceShareInvitationArns?: list<string>|null,
     *     resourceShareArns?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
