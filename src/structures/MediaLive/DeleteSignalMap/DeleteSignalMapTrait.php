<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteSignalMap;

trait DeleteSignalMapTrait
{
    /**
     * @param DeleteSignalMapRequest $args
     * @return void
     */
    public function deleteSignalMap(DeleteSignalMapRequest $args)
    {
        parent::deleteSignalMap($args->toArray());
    }
}
