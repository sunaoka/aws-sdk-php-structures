<?php

namespace Sunaoka\Aws\Structures\DirectoryService\EnableRadius;

trait EnableRadiusTrait
{
    /**
     * @param EnableRadiusRequest $args
     * @return EnableRadiusResponse
     */
    public function enableRadius(EnableRadiusRequest $args)
    {
        $result = parent::enableRadius($args->toArray());
        return new EnableRadiusResponse($result->toArray());
    }
}
