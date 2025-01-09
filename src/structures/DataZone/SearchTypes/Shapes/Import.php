<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $revision
 */
class Import extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     revision: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
