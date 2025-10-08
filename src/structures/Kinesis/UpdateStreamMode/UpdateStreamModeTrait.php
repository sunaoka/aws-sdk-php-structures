<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateStreamMode;

trait UpdateStreamModeTrait
{
    /**
     * @param UpdateStreamModeRequest $args
     * @return void
     */
    public function updateStreamMode(UpdateStreamModeRequest $args)
    {
        parent::updateStreamMode($args->toArray());
    }
}
