<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateGovCloudAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Email
 * @property string $AccountName
 * @property string|null $RoleName
 * @property 'ALLOW'|'DENY'|null $IamUserAccessToBilling
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateGovCloudAccountRequest extends Request
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
