<?php

namespace Sunaoka\Aws\Structures\mgn\ListNetworkMigrationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $networkMigrationExecutionIDs
 * @property list<'PENDING'|'STARTED'|'SUCCEEDED'|'FAILED'>|null $networkMigrationExecutionStatuses
 */
class ListNetworkMigrationExecutionRequestFilters extends Shape
{
    /**
     * @param array{
     *     networkMigrationExecutionIDs?: list<string>|null,
     *     networkMigrationExecutionStatuses?: list<'PENDING'|'STARTED'|'SUCCEEDED'|'FAILED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
