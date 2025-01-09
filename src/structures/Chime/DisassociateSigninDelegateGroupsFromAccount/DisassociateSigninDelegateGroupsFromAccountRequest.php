<?php

namespace Sunaoka\Aws\Structures\Chime\DisassociateSigninDelegateGroupsFromAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property list<string> $GroupNames
 */
class DisassociateSigninDelegateGroupsFromAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     GroupNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
