<?php

namespace Sunaoka\Aws\Structures\DataPipeline\SetStatus;

trait SetStatusTrait
{
    /**
     * @param SetStatusRequest $args
     * @return void
     */
    public function setStatus(SetStatusRequest $args)
    {
        parent::setStatus($args->toArray());
    }
}
