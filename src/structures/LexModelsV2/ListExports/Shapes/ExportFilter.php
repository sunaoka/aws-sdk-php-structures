<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ExportResourceType' $name
 * @property list<string> $values
 * @property 'CO'|'EQ' $operator
 */
class ExportFilter extends Shape
{
    /**
     * @param array{
     *     name: 'ExportResourceType',
     *     values: list<string>,
     *     operator: 'CO'|'EQ'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
