<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutActionInteractions;

trait PutActionInteractionsTrait
{
    /**
     * @param PutActionInteractionsRequest $args
     * @return void
     */
    public function putActionInteractions(PutActionInteractionsRequest $args)
    {
        parent::putActionInteractions($args->toArray());
    }
}
