<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteBuildBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteBuildBatchRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
