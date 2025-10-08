<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListInvalidations;

trait ListInvalidationsTrait
{
    /**
     * @param ListInvalidationsRequest $args
     * @return ListInvalidationsResponse
     */
    public function listInvalidations(ListInvalidationsRequest $args)
    {
        $result = parent::listInvalidations($args->toArray());
        return new ListInvalidationsResponse($result->toArray());
    }
}
