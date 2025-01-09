<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 */
class GetMembershipRequest extends Request
{
    /**
     * @param array{membershipIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
