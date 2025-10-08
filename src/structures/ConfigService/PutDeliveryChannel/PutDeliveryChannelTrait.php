<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutDeliveryChannel;

trait PutDeliveryChannelTrait
{
    /**
     * @param PutDeliveryChannelRequest $args
     * @return void
     */
    public function putDeliveryChannel(PutDeliveryChannelRequest $args)
    {
        parent::putDeliveryChannel($args->toArray());
    }
}
