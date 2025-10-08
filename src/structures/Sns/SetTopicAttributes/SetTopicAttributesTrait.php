<?php

namespace Sunaoka\Aws\Structures\Sns\SetTopicAttributes;

trait SetTopicAttributesTrait
{
    /**
     * @param SetTopicAttributesRequest $args
     * @return void
     */
    public function setTopicAttributes(SetTopicAttributesRequest $args)
    {
        parent::setTopicAttributes($args->toArray());
    }
}
