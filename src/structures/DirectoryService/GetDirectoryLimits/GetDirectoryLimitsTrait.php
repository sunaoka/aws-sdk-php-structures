<?php

namespace Sunaoka\Aws\Structures\DirectoryService\GetDirectoryLimits;

trait GetDirectoryLimitsTrait
{
    /**
     * @param GetDirectoryLimitsRequest $args
     * @return GetDirectoryLimitsResponse
     */
    public function getDirectoryLimits(GetDirectoryLimitsRequest $args)
    {
        $result = parent::getDirectoryLimits($args->toArray());
        return new GetDirectoryLimitsResponse($result->toArray());
    }
}
