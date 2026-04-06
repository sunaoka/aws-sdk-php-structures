<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetSessionIdentifier> $identifiers
 */
class BatchGetSessionRequest extends Request
{
    /**
     * @param array{identifiers: list<Shapes\BatchGetSessionIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
