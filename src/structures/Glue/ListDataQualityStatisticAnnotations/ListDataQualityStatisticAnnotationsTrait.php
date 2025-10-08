<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityStatisticAnnotations;

trait ListDataQualityStatisticAnnotationsTrait
{
    /**
     * @param ListDataQualityStatisticAnnotationsRequest $args
     * @return ListDataQualityStatisticAnnotationsResponse
     */
    public function listDataQualityStatisticAnnotations(ListDataQualityStatisticAnnotationsRequest $args)
    {
        $result = parent::listDataQualityStatisticAnnotations($args->toArray());
        return new ListDataQualityStatisticAnnotationsResponse($result->toArray());
    }
}
