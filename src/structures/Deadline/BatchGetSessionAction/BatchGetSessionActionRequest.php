<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetSessionAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetSessionActionIdentifier> $identifiers
 */
class BatchGetSessionActionRequest extends Request
{
    /**
     * @param array{identifiers: list<Shapes\BatchGetSessionActionIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
