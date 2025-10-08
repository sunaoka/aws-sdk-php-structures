<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteDeliveryChannel;

trait DeleteDeliveryChannelTrait
{
    /**
     * @param DeleteDeliveryChannelRequest $args
     * @return void
     */
    public function deleteDeliveryChannel(DeleteDeliveryChannelRequest $args)
    {
        parent::deleteDeliveryChannel($args->toArray());
    }
}
