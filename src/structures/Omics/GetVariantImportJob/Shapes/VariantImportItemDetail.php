<?php

namespace Sunaoka\Aws\Structures\Omics\GetVariantImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $jobStatus
 * @property string|null $statusMessage
 */
class VariantImportItemDetail extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     jobStatus: 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES',
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
