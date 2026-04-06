<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetTaskIdentifier> $identifiers
 */
class BatchGetTaskRequest extends Request
{
    /**
     * @param array{identifiers: list<Shapes\BatchGetTaskIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
