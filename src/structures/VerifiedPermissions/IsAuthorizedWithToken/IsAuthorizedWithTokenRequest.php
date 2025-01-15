<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorizedWithToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string|null $identityToken
 * @property string|null $accessToken
 * @property Shapes\ActionIdentifier|null $action
 * @property Shapes\EntityIdentifier|null $resource
 * @property Shapes\ContextDefinition|null $context
 * @property Shapes\EntitiesDefinition|null $entities
 */
class IsAuthorizedWithTokenRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     identityToken?: string|null,
     *     accessToken?: string|null,
     *     action?: Shapes\ActionIdentifier|null,
     *     resource?: Shapes\EntityIdentifier|null,
     *     context?: Shapes\ContextDefinition|null,
     *     entities?: Shapes\EntitiesDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
