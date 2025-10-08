<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListThemeVersions;

trait ListThemeVersionsTrait
{
    /**
     * @param ListThemeVersionsRequest $args
     * @return ListThemeVersionsResponse
     */
    public function listThemeVersions(ListThemeVersionsRequest $args)
    {
        $result = parent::listThemeVersions($args->toArray());
        return new ListThemeVersionsResponse($result->toArray());
    }
}
