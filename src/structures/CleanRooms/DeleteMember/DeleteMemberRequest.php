<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collaborationIdentifier
 * @property string $accountId
 */
class DeleteMemberRequest extends Request
{
    /**
     * @param array{
     *     collaborationIdentifier: string,
     *     accountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
