<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetJobIdentifier> $identifiers
 */
class BatchGetJobRequest extends Request
{
    /**
     * @param array{identifiers: list<Shapes\BatchGetJobIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
