<?php

namespace Sunaoka\Aws\Structures\Deadline\ListJobParameterDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property string $queueId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListJobParameterDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     queueId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
