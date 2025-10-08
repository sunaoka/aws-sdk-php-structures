<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListTypeRegistrations;

trait ListTypeRegistrationsTrait
{
    /**
     * @param ListTypeRegistrationsRequest $args
     * @return ListTypeRegistrationsResponse
     */
    public function listTypeRegistrations(ListTypeRegistrationsRequest $args)
    {
        $result = parent::listTypeRegistrations($args->toArray());
        return new ListTypeRegistrationsResponse($result->toArray());
    }
}
