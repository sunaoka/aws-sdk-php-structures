<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxDataviews;

trait ListKxDataviewsTrait
{
    /**
     * @param ListKxDataviewsRequest $args
     * @return ListKxDataviewsResponse
     */
    public function listKxDataviews(ListKxDataviewsRequest $args)
    {
        $result = parent::listKxDataviews($args->toArray());
        return new ListKxDataviewsResponse($result->toArray());
    }
}
