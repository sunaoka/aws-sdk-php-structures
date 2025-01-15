<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string|null $identityToken
 * @property string|null $accessToken
 * @property Shapes\EntitiesDefinition|null $entities
 * @property list<Shapes\BatchIsAuthorizedWithTokenInputItem> $requests
 */
class BatchIsAuthorizedWithTokenRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     identityToken?: string|null,
     *     accessToken?: string|null,
     *     entities?: Shapes\EntitiesDefinition|null,
     *     requests: list<Shapes\BatchIsAuthorizedWithTokenInputItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
