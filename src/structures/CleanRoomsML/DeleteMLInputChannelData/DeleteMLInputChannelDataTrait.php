<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\DeleteMLInputChannelData;

trait DeleteMLInputChannelDataTrait
{
    /**
     * @param DeleteMLInputChannelDataRequest $args
     * @return void
     */
    public function deleteMLInputChannelData(DeleteMLInputChannelDataRequest $args)
    {
        parent::deleteMLInputChannelData($args->toArray());
    }
}
