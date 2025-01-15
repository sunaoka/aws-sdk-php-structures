<?php

namespace Sunaoka\Aws\Structures\AuditManager\GetSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'DEFAULT'|null $deleteResources
 */
class DeregistrationPolicy extends Shape
{
    /**
     * @param array{deleteResources?: 'ALL'|'DEFAULT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
