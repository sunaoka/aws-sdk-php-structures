<?php

namespace Sunaoka\Aws\Structures\Glacier\ListParts;

trait ListPartsTrait
{
    /**
     * @param ListPartsRequest $args
     * @return ListPartsResponse
     */
    public function listParts(ListPartsRequest $args)
    {
        $result = parent::listParts($args->toArray());
        return new ListPartsResponse($result->toArray());
    }
}
