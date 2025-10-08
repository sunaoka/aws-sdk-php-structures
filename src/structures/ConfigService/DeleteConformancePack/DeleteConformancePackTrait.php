<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConformancePack;

trait DeleteConformancePackTrait
{
    /**
     * @param DeleteConformancePackRequest $args
     * @return void
     */
    public function deleteConformancePack(DeleteConformancePackRequest $args)
    {
        parent::deleteConformancePack($args->toArray());
    }
}
