<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteChannelBan;

trait DeleteChannelBanTrait
{
    /**
     * @param DeleteChannelBanRequest $args
     * @return void
     */
    public function deleteChannelBan(DeleteChannelBanRequest $args)
    {
        parent::deleteChannelBan($args->toArray());
    }
}
