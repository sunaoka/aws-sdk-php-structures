<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteConfiguredModelAlgorithm;

trait DeleteConfiguredModelAlgorithmTrait
{
    /**
     * @param DeleteConfiguredModelAlgorithmRequest $args
     * @return void
     */
    public function deleteConfiguredModelAlgorithm(DeleteConfiguredModelAlgorithmRequest $args)
    {
        parent::deleteConfiguredModelAlgorithm($args->toArray());
    }
}
