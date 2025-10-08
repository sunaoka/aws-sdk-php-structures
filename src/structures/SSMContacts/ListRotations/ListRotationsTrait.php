<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListRotations;

trait ListRotationsTrait
{
    /**
     * @param ListRotationsRequest $args
     * @return ListRotationsResponse
     */
    public function listRotations(ListRotationsRequest $args)
    {
        $result = parent::listRotations($args->toArray());
        return new ListRotationsResponse($result->toArray());
    }
}
