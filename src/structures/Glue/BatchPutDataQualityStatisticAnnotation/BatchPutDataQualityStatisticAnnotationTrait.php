<?php

namespace Sunaoka\Aws\Structures\Glue\BatchPutDataQualityStatisticAnnotation;

trait BatchPutDataQualityStatisticAnnotationTrait
{
    /**
     * @param BatchPutDataQualityStatisticAnnotationRequest $args
     * @return BatchPutDataQualityStatisticAnnotationResponse
     */
    public function batchPutDataQualityStatisticAnnotation(BatchPutDataQualityStatisticAnnotationRequest $args)
    {
        $result = parent::batchPutDataQualityStatisticAnnotation($args->toArray());
        return new BatchPutDataQualityStatisticAnnotationResponse($result->toArray());
    }
}
