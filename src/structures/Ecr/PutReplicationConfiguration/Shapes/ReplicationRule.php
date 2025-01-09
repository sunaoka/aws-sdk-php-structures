<?php

namespace Sunaoka\Aws\Structures\Ecr\PutReplicationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ReplicationDestination> $destinations
 * @property list<RepositoryFilter> $repositoryFilters
 */
class ReplicationRule extends Shape
{
    /**
     * @param array{
     *     destinations: list<ReplicationDestination>,
     *     repositoryFilters?: list<RepositoryFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
