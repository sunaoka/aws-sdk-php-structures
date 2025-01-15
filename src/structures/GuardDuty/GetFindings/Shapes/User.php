<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Uid
 * @property string $Type
 * @property string|null $CredentialUid
 * @property Account|null $Account
 */
class User extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Uid: string,
     *     Type: string,
     *     CredentialUid?: string|null,
     *     Account?: Account|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
