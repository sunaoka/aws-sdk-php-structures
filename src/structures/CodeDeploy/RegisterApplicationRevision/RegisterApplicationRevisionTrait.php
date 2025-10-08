<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\RegisterApplicationRevision;

trait RegisterApplicationRevisionTrait
{
    /**
     * @param RegisterApplicationRevisionRequest $args
     * @return void
     */
    public function registerApplicationRevision(RegisterApplicationRevisionRequest $args)
    {
        parent::registerApplicationRevision($args->toArray());
    }
}
