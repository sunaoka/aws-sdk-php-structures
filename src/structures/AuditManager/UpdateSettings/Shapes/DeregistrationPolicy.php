<?php

namespace Sunaoka\Aws\Structures\AuditManager\UpdateSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|'DEFAULT' $deleteResources
 */
class DeregistrationPolicy extends Shape
{
    /**
     * @param array{deleteResources?: 'ALL'|'DEFAULT'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
