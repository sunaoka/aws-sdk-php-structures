<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetBillOfMaterialsImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $jobId
 */
class GetBillOfMaterialsImportJobRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     jobId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
