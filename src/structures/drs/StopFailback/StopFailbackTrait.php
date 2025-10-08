<?php

namespace Sunaoka\Aws\Structures\drs\StopFailback;

trait StopFailbackTrait
{
    /**
     * @param StopFailbackRequest $args
     * @return void
     */
    public function stopFailback(StopFailbackRequest $args)
    {
        parent::stopFailback($args->toArray());
    }
}
