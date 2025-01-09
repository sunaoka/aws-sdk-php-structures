<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logRecordPointer
 * @property bool $unmask
 */
class GetLogRecordRequest extends Request
{
    /**
     * @param array{
     *     logRecordPointer: string,
     *     unmask?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
