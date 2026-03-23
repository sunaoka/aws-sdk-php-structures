<?php

namespace Sunaoka\Aws\Structures\Omics\CancelRunBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchId
 */
class CancelRunBatchRequest extends Request
{
    /**
     * @param array{batchId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
