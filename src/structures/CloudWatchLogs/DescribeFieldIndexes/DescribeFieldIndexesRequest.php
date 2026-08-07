<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeFieldIndexes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $logGroupIdentifiers
 * @property list<'DEFAULT'|'CUSTOM'|'AUTO'|'INACTIVE'>|null $indexCategories
 * @property string|null $nextToken
 */
class DescribeFieldIndexesRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifiers: list<string>,
     *     indexCategories?: list<'DEFAULT'|'CUSTOM'|'AUTO'|'INACTIVE'>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
