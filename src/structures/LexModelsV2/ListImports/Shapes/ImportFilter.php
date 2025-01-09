<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListImports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ImportResourceType' $name
 * @property list<string> $values
 * @property 'CO'|'EQ' $operator
 */
class ImportFilter extends Shape
{
    /**
     * @param array{
     *     name: 'ImportResourceType',
     *     values: list<string>,
     *     operator: 'CO'|'EQ'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
