<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuildBatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 */
class BatchGetBuildBatchesRequest extends Request
{
    /**
     * @param array{ids: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
