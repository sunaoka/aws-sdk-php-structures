<?php

namespace Sunaoka\Aws\Structures\Sqs\ChangeMessageVisibility;

trait ChangeMessageVisibilityTrait
{
    /**
     * @param ChangeMessageVisibilityRequest $args
     * @return void
     */
    public function changeMessageVisibility(ChangeMessageVisibilityRequest $args)
    {
        parent::changeMessageVisibility($args->toArray());
    }
}
