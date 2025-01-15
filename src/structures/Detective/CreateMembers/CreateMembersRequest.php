<?php

namespace Sunaoka\Aws\Structures\Detective\CreateMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string|null $Message
 * @property bool|null $DisableEmailNotification
 * @property list<Shapes\Account> $Accounts
 */
class CreateMembersRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     Message?: string|null,
     *     DisableEmailNotification?: bool|null,
     *     Accounts: list<Shapes\Account>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
