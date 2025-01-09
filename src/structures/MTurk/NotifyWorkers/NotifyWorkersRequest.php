<?php

namespace Sunaoka\Aws\Structures\MTurk\NotifyWorkers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Subject
 * @property string $MessageText
 * @property list<string> $WorkerIds
 */
class NotifyWorkersRequest extends Request
{
    /**
     * @param array{
     *     Subject: string,
     *     MessageText: string,
     *     WorkerIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
