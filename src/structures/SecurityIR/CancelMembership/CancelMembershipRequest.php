<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CancelMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipId
 */
class CancelMembershipRequest extends Request
{
    /**
     * @param array{membershipId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
