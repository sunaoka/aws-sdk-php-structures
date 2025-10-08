<?php

namespace Sunaoka\Aws\Structures\Sns\GetTopicAttributes;

trait GetTopicAttributesTrait
{
    /**
     * @param GetTopicAttributesRequest $args
     * @return GetTopicAttributesResponse
     */
    public function getTopicAttributes(GetTopicAttributesRequest $args)
    {
        $result = parent::getTopicAttributes($args->toArray());
        return new GetTopicAttributesResponse($result->toArray());
    }
}
