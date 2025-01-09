<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Uid
 * @property string $Type
 * @property string $CredentialUid
 * @property UserAccount $Account
 */
class ActorUser extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Uid?: string,
     *     Type?: string,
     *     CredentialUid?: string,
     *     Account?: UserAccount
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
