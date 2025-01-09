<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorized;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property Shapes\EntityIdentifier $principal
 * @property Shapes\ActionIdentifier $action
 * @property Shapes\EntityIdentifier $resource
 * @property Shapes\ContextDefinition $context
 * @property Shapes\EntitiesDefinition $entities
 */
class IsAuthorizedRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     principal?: Shapes\EntityIdentifier,
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
