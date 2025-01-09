<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetBillOfMaterialsImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $jobId
 * @property 'NEW'|'FAILED'|'IN_PROGRESS'|'QUEUED'|'SUCCESS' $status
 * @property string $s3uri
 * @property string $message
 */
class BillOfMaterialsImportJob extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     jobId: string,
     *     status: 'NEW'|'FAILED'|'IN_PROGRESS'|'QUEUED'|'SUCCESS',
     *     s3uri: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
