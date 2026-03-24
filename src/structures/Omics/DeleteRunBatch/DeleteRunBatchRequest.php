<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteRunBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchId
 */
class DeleteRunBatchRequest extends Request
{
    /**
     * @param array{batchId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
