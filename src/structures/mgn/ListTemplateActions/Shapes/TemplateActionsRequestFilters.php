<?php

namespace Sunaoka\Aws\Structures\mgn\ListTemplateActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $actionIDs
 */
class TemplateActionsRequestFilters extends Shape
{
    /**
     * @param array{actionIDs?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
