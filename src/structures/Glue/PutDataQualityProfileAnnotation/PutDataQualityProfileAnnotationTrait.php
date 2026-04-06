<?php

namespace Sunaoka\Aws\Structures\Glue\PutDataQualityProfileAnnotation;

trait PutDataQualityProfileAnnotationTrait
{
    /**
     * @param PutDataQualityProfileAnnotationRequest $args
     * @return PutDataQualityProfileAnnotationResponse
     */
    public function putDataQualityProfileAnnotation(PutDataQualityProfileAnnotationRequest $args)
    {
        $result = parent::putDataQualityProfileAnnotation($args->toArray());
        return new PutDataQualityProfileAnnotationResponse($result->toArray());
    }
}
