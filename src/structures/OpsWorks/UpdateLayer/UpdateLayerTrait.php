<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateLayer;

trait UpdateLayerTrait
{
    /**
     * @param UpdateLayerRequest $args
     * @return void
     */
    public function updateLayer(UpdateLayerRequest $args)
    {
        parent::updateLayer($args->toArray());
    }
}
