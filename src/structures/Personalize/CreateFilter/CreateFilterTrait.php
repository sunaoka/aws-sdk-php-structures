<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateFilter;

trait CreateFilterTrait
{
    /**
     * @param CreateFilterRequest $args
     * @return CreateFilterResponse
     */
    public function createFilter(CreateFilterRequest $args)
    {
        $result = parent::createFilter($args->toArray());
        return new CreateFilterResponse($result->toArray());
    }
}
