<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Email
 * @property string $AccountName
 * @property string|null $RoleName
 * @property 'ALLOW'|'DENY'|null $IamUserAccessToBilling
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateAccountRequest extends Request
{
    /**
     * @param array{
     *     Email: string,
     *     AccountName: string,
     *     RoleName?: string|null,
     *     IamUserAccessToBilling?: 'ALLOW'|'DENY'|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
