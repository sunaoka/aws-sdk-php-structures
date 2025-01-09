<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetUserId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property Shapes\AlternateIdentifier $AlternateIdentifier
 */
class GetUserIdRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     AlternateIdentifier: Shapes\AlternateIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
