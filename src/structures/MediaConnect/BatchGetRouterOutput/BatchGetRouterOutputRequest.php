<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Arns
 */
class BatchGetRouterOutputRequest extends Request
{
    /**
     * @param array{Arns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
