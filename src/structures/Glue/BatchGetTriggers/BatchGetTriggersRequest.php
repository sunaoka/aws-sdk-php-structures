<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TriggerNames
 */
class BatchGetTriggersRequest extends Request
{
    /**
     * @param array{TriggerNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
