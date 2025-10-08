<?php

namespace Sunaoka\Aws\Structures\DataExchange\CancelJob;

trait CancelJobTrait
{
    /**
     * @param CancelJobRequest $args
     * @return void
     */
    public function cancelJob(CancelJobRequest $args)
    {
        parent::cancelJob($args->toArray());
    }
}
