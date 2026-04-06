<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetWorkerIdentifier> $identifiers
 */
class BatchGetWorkerRequest extends Request
{
    /**
     * @param array{identifiers: list<Shapes\BatchGetWorkerIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
