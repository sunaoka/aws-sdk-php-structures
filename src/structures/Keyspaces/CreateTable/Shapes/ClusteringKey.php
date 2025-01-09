<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'ASC'|'DESC' $orderBy
 */
class ClusteringKey extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     orderBy: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
