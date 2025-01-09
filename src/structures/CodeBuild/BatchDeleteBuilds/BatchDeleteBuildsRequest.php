<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchDeleteBuilds;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 */
class BatchDeleteBuildsRequest extends Request
{
    /**
     * @param array{ids: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
