<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetSandboxes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 */
class BatchGetSandboxesRequest extends Request
{
    /**
     * @param array{ids: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
