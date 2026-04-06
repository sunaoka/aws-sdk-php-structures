<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Uid
 * @property string|null $Type
 * @property string|null $CredentialUid
 * @property UserAccount|null $Account
 */
class ActorUser extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Uid?: string|null,
     *     Type?: string|null,
     *     CredentialUid?: string|null,
     *     Account?: UserAccount|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
