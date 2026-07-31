<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property string|null $testId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestRunsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     testId?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
