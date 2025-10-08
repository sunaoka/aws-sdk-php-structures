<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelCard;

trait DeleteModelCardTrait
{
    /**
     * @param DeleteModelCardRequest $args
     * @return void
     */
    public function deleteModelCard(DeleteModelCardRequest $args)
    {
        parent::deleteModelCard($args->toArray());
    }
}
