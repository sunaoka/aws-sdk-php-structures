<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorized\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityIdentifier $principal
 * @property ActionIdentifier $action
 * @property EntityIdentifier $resource
 * @property ContextDefinition $context
 */
class BatchIsAuthorizedInputItem extends Shape
{
    /**
     * @param array{
     *     principal?: EntityIdentifier,
     *     action?: ActionIdentifier,
     *     resource?: EntityIdentifier,
     *     context?: ContextDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
