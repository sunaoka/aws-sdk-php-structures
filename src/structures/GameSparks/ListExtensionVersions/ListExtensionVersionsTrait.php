<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListExtensionVersions;

trait ListExtensionVersionsTrait
{
    /**
     * @param ListExtensionVersionsRequest $args
     * @return ListExtensionVersionsResponse
     */
    public function listExtensionVersions(ListExtensionVersionsRequest $args)
    {
        $result = parent::listExtensionVersions($args->toArray());
        return new ListExtensionVersionsResponse($result->toArray());
    }
}
