<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListIndices;

trait ListIndicesTrait
{
    /**
     * @param ListIndicesRequest $args
     * @return ListIndicesResponse
     */
    public function listIndices(ListIndicesRequest $args)
    {
        $result = parent::listIndices($args->toArray());
        return new ListIndicesResponse($result->toArray());
    }
}
