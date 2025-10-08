<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeletePartnerEventSource;

trait DeletePartnerEventSourceTrait
{
    /**
     * @param DeletePartnerEventSourceRequest $args
     * @return void
     */
    public function deletePartnerEventSource(DeletePartnerEventSourceRequest $args)
    {
        parent::deletePartnerEventSource($args->toArray());
    }
}
