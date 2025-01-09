<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListImportJobsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
