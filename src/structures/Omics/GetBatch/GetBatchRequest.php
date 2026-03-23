<?php

namespace Sunaoka\Aws\Structures\Omics\GetBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchId
 */
class GetBatchRequest extends Request
{
    /**
     * @param array{batchId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
