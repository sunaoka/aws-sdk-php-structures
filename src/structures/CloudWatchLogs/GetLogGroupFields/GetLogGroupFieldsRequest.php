<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogGroupFields;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupName
 * @property int<0, max>|null $time
 * @property string|null $logGroupIdentifier
 */
class GetLogGroupFieldsRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     time?: int<0, max>|null,
     *     logGroupIdentifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
