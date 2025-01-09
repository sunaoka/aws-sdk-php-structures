<?php

namespace Sunaoka\Aws\Structures\Connect\CreateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaskTemplateFieldIdentifier $Id
 */
class InvisibleFieldInfo extends Shape
{
    /**
     * @param array{Id?: TaskTemplateFieldIdentifier} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
