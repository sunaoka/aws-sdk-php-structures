<?php

namespace Sunaoka\Aws\Structures\CleanRooms\DeleteMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 */
class DeleteMembershipRequest extends Request
{
    /**
     * @param array{membershipIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
