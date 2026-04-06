<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetStep;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetStepIdentifier> $identifiers
 */
class BatchGetStepRequest extends Request
{
    /**
     * @param array{identifiers: list<Shapes\BatchGetStepIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
