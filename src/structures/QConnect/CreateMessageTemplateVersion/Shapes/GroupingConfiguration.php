<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateMessageTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $criteria
 * @property list<string>|null $values
 */
class GroupingConfiguration extends Shape
{
    /**
     * @param array{
     *     criteria?: string|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
