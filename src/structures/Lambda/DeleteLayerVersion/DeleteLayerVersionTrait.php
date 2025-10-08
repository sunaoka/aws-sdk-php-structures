<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteLayerVersion;

trait DeleteLayerVersionTrait
{
    /**
     * @param DeleteLayerVersionRequest $args
     * @return void
     */
    public function deleteLayerVersion(DeleteLayerVersionRequest $args)
    {
        parent::deleteLayerVersion($args->toArray());
    }
}
