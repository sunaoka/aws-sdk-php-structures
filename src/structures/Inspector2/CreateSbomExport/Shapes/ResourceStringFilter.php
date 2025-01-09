<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateSbomExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'NOT_EQUALS' $comparison
 * @property string $value
 */
class ResourceStringFilter extends Shape
{
    /**
     * @param array{
     *     comparison: 'EQUALS'|'NOT_EQUALS',
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
