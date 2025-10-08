<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateContactMethod;

trait CreateContactMethodTrait
{
    /**
     * @param CreateContactMethodRequest $args
     * @return CreateContactMethodResponse
     */
    public function createContactMethod(CreateContactMethodRequest $args)
    {
        $result = parent::createContactMethod($args->toArray());
        return new CreateContactMethodResponse($result->toArray());
    }
}
