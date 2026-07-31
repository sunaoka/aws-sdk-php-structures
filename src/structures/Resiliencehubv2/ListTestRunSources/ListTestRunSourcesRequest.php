<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $serviceArn
 * @property 'SUCCESS_CRITERIA'|'OBSERVABILITY'|null $type
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestRunSourcesRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     serviceArn: string,
     *     type?: 'SUCCESS_CRITERIA'|'OBSERVABILITY'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
