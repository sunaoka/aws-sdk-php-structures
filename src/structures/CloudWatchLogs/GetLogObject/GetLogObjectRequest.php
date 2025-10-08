<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogObject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $unmask
 * @property string $logObjectPointer
 */
class GetLogObjectRequest extends Request
{
    /**
     * @param array{
     *     unmask?: bool|null,
     *     logObjectPointer: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
