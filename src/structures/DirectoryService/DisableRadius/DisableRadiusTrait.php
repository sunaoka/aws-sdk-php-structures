<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DisableRadius;

trait DisableRadiusTrait
{
    /**
     * @param DisableRadiusRequest $args
     * @return DisableRadiusResponse
     */
    public function disableRadius(DisableRadiusRequest $args)
    {
        $result = parent::disableRadius($args->toArray());
        return new DisableRadiusResponse($result->toArray());
    }
}
