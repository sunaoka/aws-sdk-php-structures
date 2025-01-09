<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorizedWithToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property string $identityToken
 * @property string $accessToken
 * @property Shapes\ActionIdentifier $action
 * @property Shapes\EntityIdentifier $resource
 * @property Shapes\ContextDefinition $context
 * @property Shapes\EntitiesDefinition $entities
 */
class IsAuthorizedWithTokenRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     identityToken?: string,
     *     accessToken?: string,
     *     action?: Shapes\ActionIdentifier,
     *     resource?: Shapes\EntityIdentifier,
     *     context?: Shapes\ContextDefinition,
     *     entities?: Shapes\EntitiesDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
