<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjectAnnotation;

trait DeleteObjectAnnotationTrait
{
    /**
     * @param DeleteObjectAnnotationRequest $args
     * @return DeleteObjectAnnotationResponse
     */
    public function deleteObjectAnnotation(DeleteObjectAnnotationRequest $args)
    {
        $result = parent::deleteObjectAnnotation($args->toArray());
        return new DeleteObjectAnnotationResponse($result->toArray());
    }
}
