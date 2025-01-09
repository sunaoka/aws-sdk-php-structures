<?php

namespace Sunaoka\Aws\Structures\Detective\DisassociateMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 */
class DisassociateMembershipRequest extends Request
{
    /**
     * @param array{GraphArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
