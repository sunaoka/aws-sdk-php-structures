<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectAnnotation;

trait GetObjectAnnotationTrait
{
    /**
     * @param GetObjectAnnotationRequest $args
     * @return GetObjectAnnotationResponse
     */
    public function getObjectAnnotation(GetObjectAnnotationRequest $args)
    {
        $result = parent::getObjectAnnotation($args->toArray());
        return new GetObjectAnnotationResponse($result->toArray());
    }
}
