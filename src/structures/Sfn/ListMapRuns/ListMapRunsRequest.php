<?php

namespace Sunaoka\Aws\Structures\Sfn\ListMapRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionArn
 * @property int<0, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListMapRunsRequest extends Request
{
    /**
     * @param array{
     *     executionArn: string,
     *     maxResults?: int<0, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
