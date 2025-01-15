<?php

namespace Sunaoka\Aws\Structures\VerifiedPermissions\BatchIsAuthorizedWithToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActionIdentifier|null $action
 * @property EntityIdentifier|null $resource
 * @property ContextDefinition|null $context
 */
class BatchIsAuthorizedWithTokenInputItem extends Shape
{
    /**
     * @param array{
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
