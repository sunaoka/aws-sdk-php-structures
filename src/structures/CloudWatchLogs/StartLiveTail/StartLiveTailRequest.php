<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $logGroupIdentifiers
 * @property list<string> $logStreamNames
 * @property list<string> $logStreamNamePrefixes
 * @property string $logEventFilterPattern
 */
class StartLiveTailRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifiers: list<string>,
     *     logStreamNames?: list<string>,
     *     logStreamNamePrefixes?: list<string>,
     *     logEventFilterPattern?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
