<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\DeleteIdentitySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $identitySourceId
 */
class DeleteIdentitySourceRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     identitySourceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
