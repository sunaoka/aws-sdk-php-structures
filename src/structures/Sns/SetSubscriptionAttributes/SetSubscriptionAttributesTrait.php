<?php

namespace Sunaoka\Aws\Structures\Sns\SetSubscriptionAttributes;

trait SetSubscriptionAttributesTrait
{
    /**
     * @param SetSubscriptionAttributesRequest $args
     * @return void
     */
    public function setSubscriptionAttributes(SetSubscriptionAttributesRequest $args)
    {
        parent::setSubscriptionAttributes($args->toArray());
    }
}
