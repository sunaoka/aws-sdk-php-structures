<?php

namespace Sunaoka\Aws\Structures\Shield\ListProtections;

trait ListProtectionsTrait
{
    /**
     * @param ListProtectionsRequest $args
     * @return ListProtectionsResponse
     */
    public function listProtections(ListProtectionsRequest $args)
    {
        $result = parent::listProtections($args->toArray());
        return new ListProtectionsResponse($result->toArray());
    }
}
