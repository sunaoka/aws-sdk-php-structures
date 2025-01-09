<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $identityToken
 * @property string $accessToken
 * @property Shapes\EntitiesDefinition $entities
 * @property list<Shapes\BatchIsAuthorizedWithTokenInputItem> $requests
 */
class BatchIsAuthorizedWithTokenRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     identityToken?: string,
     *     accessToken?: string,
     *     entities?: Shapes\EntitiesDefinition,
     *     requests: list<Shapes\BatchIsAuthorizedWithTokenInputItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
