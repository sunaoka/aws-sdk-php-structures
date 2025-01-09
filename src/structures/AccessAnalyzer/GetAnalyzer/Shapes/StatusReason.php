<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_SERVICE_ACCESS_DISABLED'|'DELEGATED_ADMINISTRATOR_DEREGISTERED'|'ORGANIZATION_DELETED'|'SERVICE_LINKED_ROLE_CREATION_FAILED' $code
 */
class StatusReason extends Shape
{
    /**
     * @param array{code: 'AWS_SERVICE_ACCESS_DISABLED'|'DELEGATED_ADMINISTRATOR_DEREGISTERED'|'ORGANIZATION_DELETED'|'SERVICE_LINKED_ROLE_CREATION_FAILED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
