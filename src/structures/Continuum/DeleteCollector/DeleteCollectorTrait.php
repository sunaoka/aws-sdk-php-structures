<?php

namespace Sunaoka\Aws\Structures\Continuum\DeleteCollector;

trait DeleteCollectorTrait
{
    /**
     * @param DeleteCollectorRequest $args
     * @return void
     */
    public function deleteCollector(DeleteCollectorRequest $args)
    {
        parent::deleteCollector($args->toArray());
    }
}
