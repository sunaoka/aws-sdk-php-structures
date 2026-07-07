<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'AZURE' $value
 */
class ProviderFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: 'AZURE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
