<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logRecordPointer
 * @property bool|null $unmask
 */
class GetLogRecordRequest extends Request
{
    /**
     * @param array{
     *     logRecordPointer: string,
     *     unmask?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
