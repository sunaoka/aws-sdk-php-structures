<?php

namespace Sunaoka\Aws\Structures\FraudDetector\BatchGetVariable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $names
 */
class BatchGetVariableRequest extends Request
{
    /**
     * @param array{names: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
