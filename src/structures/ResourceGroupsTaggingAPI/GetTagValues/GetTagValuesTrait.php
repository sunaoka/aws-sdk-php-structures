<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetTagValues;

trait GetTagValuesTrait
{
    /**
     * @param GetTagValuesRequest $args
     * @return GetTagValuesResponse
     */
    public function getTagValues(GetTagValuesRequest $args)
    {
        $result = parent::getTagValues($args->toArray());
        return new GetTagValuesResponse($result->toArray());
    }
}
