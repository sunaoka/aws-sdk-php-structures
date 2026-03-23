<?php

namespace Sunaoka\Aws\Structures\Omics\DeleteBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchId
 */
class DeleteBatchRequest extends Request
{
    /**
     * @param array{batchId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
