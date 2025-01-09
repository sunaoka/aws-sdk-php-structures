<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListMigrationTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $ResourceName
 */
class ListMigrationTasksRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     ResourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
