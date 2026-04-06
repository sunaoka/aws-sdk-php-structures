<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchUpdateJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property list<Shapes\BatchUpdateJobItem> $jobs
 */
class BatchUpdateJobRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     jobs: list<Shapes\BatchUpdateJobItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
