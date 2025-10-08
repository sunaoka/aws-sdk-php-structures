<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPageResolutions;

trait ListPageResolutionsTrait
{
    /**
     * @param ListPageResolutionsRequest $args
     * @return ListPageResolutionsResponse
     */
    public function listPageResolutions(ListPageResolutionsRequest $args)
    {
        $result = parent::listPageResolutions($args->toArray());
        return new ListPageResolutionsResponse($result->toArray());
    }
}
