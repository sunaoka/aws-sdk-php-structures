<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogGroupFields;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property int $time
 * @property string $logGroupIdentifier
 */
class GetLogGroupFieldsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     time?: int,
     *     logGroupIdentifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
