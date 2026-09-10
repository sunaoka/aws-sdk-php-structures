<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSourceEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $testRunId
 * @property string $serviceArn
 * @property string $sourceArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListTestRunSourceEventsRequest extends Request
{
    /**
     * @param array{
     *     testRunId: string,
     *     serviceArn: string,
     *     sourceArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
