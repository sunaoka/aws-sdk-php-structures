<?php

namespace Sunaoka\Aws\Structures\Ecr\PutReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filter
 * @property 'PREFIX_MATCH' $filterType
 */
class RepositoryFilter extends Shape
{
    /**
     * @param array{
     *     filter: string,
     *     filterType: 'PREFIX_MATCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
