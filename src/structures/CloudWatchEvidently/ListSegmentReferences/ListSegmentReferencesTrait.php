<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListSegmentReferences;

trait ListSegmentReferencesTrait
{
    /**
     * @param ListSegmentReferencesRequest $args
     * @return ListSegmentReferencesResponse
     */
    public function listSegmentReferences(ListSegmentReferencesRequest $args)
    {
        $result = parent::listSegmentReferences($args->toArray());
        return new ListSegmentReferencesResponse($result->toArray());
    }
}
