<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Email
 * @property string $AccountName
 * @property string $RoleName
 * @property 'ALLOW'|'DENY' $IamUserAccessToBilling
 * @property list<Shapes\Tag> $Tags
 */
class CreateAccountRequest extends Request
{
    /**
     * @param array{
     *     Email: string,
     *     AccountName: string,
     *     RoleName?: string,
     *     IamUserAccessToBilling?: 'ALLOW'|'DENY',
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
