<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $names
 */
class BatchGetProjectsRequest extends Request
{
    /**
     * @param array{names: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
