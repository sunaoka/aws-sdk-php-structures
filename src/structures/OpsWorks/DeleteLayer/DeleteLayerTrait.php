<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DeleteLayer;

trait DeleteLayerTrait
{
    /**
     * @param DeleteLayerRequest $args
     * @return void
     */
    public function deleteLayer(DeleteLayerRequest $args)
    {
        parent::deleteLayer($args->toArray());
    }
}
