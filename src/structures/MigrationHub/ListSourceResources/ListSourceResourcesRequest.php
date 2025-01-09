<?php

namespace Sunaoka\Aws\Structures\MigrationHub\ListSourceResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProgressUpdateStream
 * @property string $MigrationTaskName
 * @property string $NextToken
 * @property int<1, 10> $MaxResults
 */
class ListSourceResourcesRequest extends Request
{
    /**
     * @param array{
     *     ProgressUpdateStream: string,
     *     MigrationTaskName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 10>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
