<?php

namespace Sunaoka\Aws\Structures\Detective\CreateMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $Message
 * @property bool $DisableEmailNotification
 * @property list<Shapes\Account> $Accounts
 */
class CreateMembersRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     Message?: string,
     *     DisableEmailNotification?: bool,
     *     Accounts: list<Shapes\Account>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
