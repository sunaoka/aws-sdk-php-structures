<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\IsAuthorized;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyStoreId
 * @property Shapes\EntityIdentifier|null $principal
 * @property Shapes\ActionIdentifier|null $action
 * @property Shapes\EntityIdentifier|null $resource
 * @property Shapes\ContextDefinition|null $context
 * @property Shapes\EntitiesDefinition|null $entities
 */
class IsAuthorizedRequest extends Request
{
    /**
     * @param array{
     *     policyStoreId: string,
     *     principal?: Shapes\EntityIdentifier|null,
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
