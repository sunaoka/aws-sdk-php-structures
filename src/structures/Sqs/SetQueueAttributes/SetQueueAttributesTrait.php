<?php

namespace Sunaoka\Aws\Structures\Sqs\SetQueueAttributes;

trait SetQueueAttributesTrait
{
    /**
     * @param SetQueueAttributesRequest $args
     * @return void
     */
    public function setQueueAttributes(SetQueueAttributesRequest $args)
    {
        parent::setQueueAttributes($args->toArray());
    }
}
