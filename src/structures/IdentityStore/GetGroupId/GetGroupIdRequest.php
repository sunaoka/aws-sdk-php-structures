<?php

namespace Sunaoka\Aws\Structures\IdentityStore\GetGroupId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property Shapes\AlternateIdentifier $AlternateIdentifier
 */
class GetGroupIdRequest extends Request
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
