<?php

namespace Sunaoka\Aws\Structures\SecurityIR\GetMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipId
 */
class GetMembershipRequest extends Request
{
    /**
     * @param array{membershipId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
