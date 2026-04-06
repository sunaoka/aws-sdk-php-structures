<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $names
 */
class BatchGetFleetsRequest extends Request
{
    /**
     * @param array{names: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
