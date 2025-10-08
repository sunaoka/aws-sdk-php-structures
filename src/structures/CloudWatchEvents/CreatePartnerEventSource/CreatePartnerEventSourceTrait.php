<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreatePartnerEventSource;

trait CreatePartnerEventSourceTrait
{
    /**
     * @param CreatePartnerEventSourceRequest $args
     * @return CreatePartnerEventSourceResponse
     */
    public function createPartnerEventSource(CreatePartnerEventSourceRequest $args)
    {
        $result = parent::createPartnerEventSource($args->toArray());
        return new CreatePartnerEventSourceResponse($result->toArray());
    }
}
