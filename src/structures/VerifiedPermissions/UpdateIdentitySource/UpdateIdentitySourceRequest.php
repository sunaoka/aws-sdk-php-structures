<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\UpdateIdentitySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $identitySourceId
 * @property Shapes\UpdateConfiguration $updateConfiguration
 * @property string $principalEntityType
 */
class UpdateIdentitySourceRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     identitySourceId: string,
     *     updateConfiguration: Shapes\UpdateConfiguration,
     *     principalEntityType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
