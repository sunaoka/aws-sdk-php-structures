<?php

namespace Sunaoka\Aws\Structures\Repostspace\SendInvites;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accessorIds
 * @property string $body
 * @property string $spaceId
 * @property string $title
 */
class SendInvitesRequest extends Request
{
    /**
     * @param array{
     *     accessorIds: list<string>,
     *     body: string,
     *     spaceId: string,
     *     title: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
