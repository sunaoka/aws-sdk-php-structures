<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $policyStoreId
 * @property Shapes\Configuration $configuration
 * @property string $principalEntityType
 */
class CreateIdentitySourceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     policyStoreId: string,
     *     configuration: Shapes\Configuration,
     *     principalEntityType?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
