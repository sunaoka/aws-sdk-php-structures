<?php

namespace Sunaoka\Aws\Structures\Omics\CancelRun;

trait CancelRunTrait
{
    /**
     * @param CancelRunRequest $args
     * @return void
     */
    public function cancelRun(CancelRunRequest $args)
    {
        parent::cancelRun($args->toArray());
    }
}
