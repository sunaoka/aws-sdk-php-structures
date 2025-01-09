<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteComputeQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ComputeQuotaId
 */
class DeleteComputeQuotaRequest extends Request
{
    /**
     * @param array{ComputeQuotaId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
