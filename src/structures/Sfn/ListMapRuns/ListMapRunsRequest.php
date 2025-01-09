<?php

namespace Sunaoka\Aws\Structures\Sfn\ListMapRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property int<0, 1000> $maxResults
 * @property string $nextToken
 */
class ListMapRunsRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     maxResults?: int<0, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
