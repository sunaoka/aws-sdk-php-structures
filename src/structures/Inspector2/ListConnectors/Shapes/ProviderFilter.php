<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS' $comparison
 * @property 'AZURE'|'GCP' $value
 */
class ProviderFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS',
     *     value: 'AZURE'|'GCP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
