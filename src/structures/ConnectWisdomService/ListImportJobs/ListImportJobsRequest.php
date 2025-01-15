<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\ListImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListImportJobsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
