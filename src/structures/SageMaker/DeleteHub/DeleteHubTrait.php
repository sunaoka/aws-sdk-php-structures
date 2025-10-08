<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteHub;

trait DeleteHubTrait
{
    /**
     * @param DeleteHubRequest $args
     * @return void
     */
    public function deleteHub(DeleteHubRequest $args)
    {
        parent::deleteHub($args->toArray());
    }
}
