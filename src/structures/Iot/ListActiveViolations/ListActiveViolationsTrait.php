<?php

namespace Sunaoka\Aws\Structures\Iot\ListActiveViolations;

trait ListActiveViolationsTrait
{
    /**
     * @param ListActiveViolationsRequest $args
     * @return ListActiveViolationsResponse
     */
    public function listActiveViolations(ListActiveViolationsRequest $args)
    {
        $result = parent::listActiveViolations($args->toArray());
        return new ListActiveViolationsResponse($result->toArray());
    }
}
