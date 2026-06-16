<?php

namespace Sunaoka\Aws\Structures\S3\PutObjectAnnotation;

trait PutObjectAnnotationTrait
{
    /**
     * @param PutObjectAnnotationRequest $args
     * @return PutObjectAnnotationResponse
     */
    public function putObjectAnnotation(PutObjectAnnotationRequest $args)
    {
        $result = parent::putObjectAnnotation($args->toArray());
        return new PutObjectAnnotationResponse($result->toArray());
    }
}
