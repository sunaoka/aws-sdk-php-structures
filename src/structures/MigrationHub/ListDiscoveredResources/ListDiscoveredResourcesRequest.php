<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListDiscoveredResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 */
class ListDiscoveredResourcesRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
