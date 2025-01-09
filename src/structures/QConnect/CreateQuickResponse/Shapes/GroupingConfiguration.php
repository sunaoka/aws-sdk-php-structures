<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateQuickResponse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $criteria
 * @property list<string> $values
 */
class GroupingConfiguration extends Shape
{
    /**
     * @param array{
     *     criteria?: string,
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
