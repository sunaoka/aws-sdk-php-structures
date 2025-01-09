<?php

namespace Sunaoka\Aws\Structures\Glue\BatchPutDataQualityStatisticAnnotation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\DatapointInclusionAnnotation> $InclusionAnnotations
 * @property string $ClientToken
 */
class BatchPutDataQualityStatisticAnnotationRequest extends Request
{
    /**
     * @param array{
     *     InclusionAnnotations: list<Shapes\DatapointInclusionAnnotation>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
