<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListResolvedTestRunTargetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $serviceArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListResolvedTestRunTargetResourcesRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     serviceArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
