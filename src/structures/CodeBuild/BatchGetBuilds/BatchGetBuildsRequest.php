<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuilds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 */
class BatchGetBuildsRequest extends Request
{
    /**
     * @param array{ids: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
