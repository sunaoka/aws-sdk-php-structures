<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CreateMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AccountDetails> $AccountDetails
 */
class CreateMembersRequest extends Request
{
    /**
     * @param array{AccountDetails: list<Shapes\AccountDetails>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
