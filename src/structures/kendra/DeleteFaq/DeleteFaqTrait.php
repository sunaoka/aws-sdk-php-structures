<?php

namespace Sunaoka\Aws\Structures\kendra\DeleteFaq;

trait DeleteFaqTrait
{
    /**
     * @param DeleteFaqRequest $args
     * @return void
     */
    public function deleteFaq(DeleteFaqRequest $args)
    {
        parent::deleteFaq($args->toArray());
    }
}
