<?php

namespace Sunaoka\Aws\Structures\S3\ListObjectAnnotations;

trait ListObjectAnnotationsTrait
{
    /**
     * @param ListObjectAnnotationsRequest $args
     * @return ListObjectAnnotationsResponse
     */
    public function listObjectAnnotations(ListObjectAnnotationsRequest $args)
    {
        $result = parent::listObjectAnnotations($args->toArray());
        return new ListObjectAnnotationsResponse($result->toArray());
    }
}
