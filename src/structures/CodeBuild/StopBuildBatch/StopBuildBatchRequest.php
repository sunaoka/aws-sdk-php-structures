<?php

namespace Sunaoka\Aws\Structures\CodeBuild\StopBuildBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class StopBuildBatchRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
