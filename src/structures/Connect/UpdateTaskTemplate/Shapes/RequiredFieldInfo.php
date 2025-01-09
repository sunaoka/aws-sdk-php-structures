<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaskTemplateFieldIdentifier $Id
 */
class RequiredFieldInfo extends Shape
{
    /**
     * @param array{Id?: TaskTemplateFieldIdentifier} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
