<?php

namespace Sunaoka\Aws\Structures\BedrockDataAutomation\ListDataAutomationLibraryIngestionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $libraryArn
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListDataAutomationLibraryIngestionJobsRequest extends Request
{
    /**
     * @param array{
     *     libraryArn: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
