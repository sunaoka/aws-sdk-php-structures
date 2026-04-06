<?php

namespace Sunaoka\Aws\Structures\Repostspace\SendInvites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property list<string> $accessorIds
 * @property string $title
 * @property string $body
 */
class SendInvitesRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     accessorIds: list<string>,
     *     title: string,
     *     body: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
