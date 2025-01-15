<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeFieldIndexes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $logGroupIdentifiers
 * @property string|null $nextToken
 */
class DescribeFieldIndexesRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifiers: list<string>,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
