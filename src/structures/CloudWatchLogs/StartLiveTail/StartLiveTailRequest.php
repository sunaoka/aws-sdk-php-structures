<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\StartLiveTail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $logGroupIdentifiers
 * @property list<string>|null $logStreamNames
 * @property list<string>|null $logStreamNamePrefixes
 * @property string|null $logEventFilterPattern
 */
class StartLiveTailRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifiers: list<string>,
     *     logStreamNames?: list<string>|null,
     *     logStreamNamePrefixes?: list<string>|null,
     *     logEventFilterPattern?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
