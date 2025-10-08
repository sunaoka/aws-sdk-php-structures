<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataAccessors;

trait ListDataAccessorsTrait
{
    /**
     * @param ListDataAccessorsRequest $args
     * @return ListDataAccessorsResponse
     */
    public function listDataAccessors(ListDataAccessorsRequest $args)
    {
        $result = parent::listDataAccessors($args->toArray());
        return new ListDataAccessorsResponse($result->toArray());
    }
}
