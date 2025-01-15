<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\CreateIdentitySource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $policyStoreId
 * @property Shapes\Configuration $configuration
 * @property string|null $principalEntityType
 */
class CreateIdentitySourceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     policyStoreId: string,
     *     configuration: Shapes\Configuration,
     *     principalEntityType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
