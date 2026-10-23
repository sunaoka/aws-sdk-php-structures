<?php

namespace Sunaoka\Aws\Structures\Continuum\ListAssociatedCollectors;

trait ListAssociatedCollectorsTrait
{
    /**
     * @param ListAssociatedCollectorsRequest $args
     * @return ListAssociatedCollectorsResponse
     */
    public function listAssociatedCollectors(ListAssociatedCollectorsRequest $args)
    {
        $result = parent::listAssociatedCollectors($args->toArray());
        return new ListAssociatedCollectorsResponse($result->toArray());
    }
}
