<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDesignations;

trait ListDesignationsTrait
{
    /**
     * @param ListDesignationsRequest $args
     * @return ListDesignationsResponse
     */
    public function listDesignations(ListDesignationsRequest $args)
    {
        $result = parent::listDesignations($args->toArray());
        return new ListDesignationsResponse($result->toArray());
    }
}
