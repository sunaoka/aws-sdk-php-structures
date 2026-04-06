<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityIdentifier|null $principal
 * @property ActionIdentifier|null $action
 * @property EntityIdentifier|null $resource
 * @property ContextDefinition|null $context
 */
class BatchIsAuthorizedInputItem extends Shape
{
    /**
     * @param array{
     *     principal?: EntityIdentifier|null,
     *     action?: ActionIdentifier|null,
     *     resource?: EntityIdentifier|null,
     *     context?: ContextDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
