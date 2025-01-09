<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeComputeQuota;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ComputeQuotaId
 * @property int $ComputeQuotaVersion
 */
class DescribeComputeQuotaRequest extends Request
{
    /**
     * @param array{
     *     ComputeQuotaId: string,
     *     ComputeQuotaVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
