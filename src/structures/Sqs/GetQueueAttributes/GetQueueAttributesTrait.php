<?php

namespace Sunaoka\Aws\Structures\Sqs\GetQueueAttributes;

trait GetQueueAttributesTrait
{
    /**
     * @param GetQueueAttributesRequest $args
     * @return GetQueueAttributesResponse
     */
    public function getQueueAttributes(GetQueueAttributesRequest $args)
    {
        $result = parent::getQueueAttributes($args->toArray());
        return new GetQueueAttributesResponse($result->toArray());
    }
}
