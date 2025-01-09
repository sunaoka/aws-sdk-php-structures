<?php

namespace Sunaoka\Aws\Structures\Chime\AssociateSigninDelegateGroupsWithAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property list<Shapes\SigninDelegateGroup> $SigninDelegateGroups
 */
class AssociateSigninDelegateGroupsWithAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     SigninDelegateGroups: list<Shapes\SigninDelegateGroup>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
