<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateTaskTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TaskTemplateFieldIdentifier $Id
 * @property string $DefaultValue
 */
class TaskTemplateDefaultFieldValue extends Shape
{
    /**
     * @param array{
     *     Id?: TaskTemplateFieldIdentifier,
     *     DefaultValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
