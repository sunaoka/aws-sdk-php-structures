<?php

namespace Sunaoka\Aws\Structures\Omics\GetAnnotationImportJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES' $jobStatus
 */
class AnnotationImportItemDetail extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     jobStatus: 'SUBMITTED'|'IN_PROGRESS'|'CANCELLED'|'COMPLETED'|'FAILED'|'COMPLETED_WITH_FAILURES'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
