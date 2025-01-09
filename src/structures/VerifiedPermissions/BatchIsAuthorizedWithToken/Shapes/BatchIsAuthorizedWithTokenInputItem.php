<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionIdentifier $action
 * @property EntityIdentifier $resource
 * @property ContextDefinition $context
 */
class BatchIsAuthorizedWithTokenInputItem extends Shape
{
    /**
     * @param array{
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
