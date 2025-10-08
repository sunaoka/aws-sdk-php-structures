<?php

namespace Sunaoka\Aws\Structures\Connect\MonitorContact;

trait MonitorContactTrait
{
    /**
     * @param MonitorContactRequest $args
     * @return MonitorContactResponse
     */
    public function monitorContact(MonitorContactRequest $args)
    {
        $result = parent::monitorContact($args->toArray());
        return new MonitorContactResponse($result->toArray());
    }
}
