<?php

namespace Sunaoka\Aws\Structures\Odb\ListFlexComponents;

trait ListFlexComponentsTrait
{
    /**
     * @param ListFlexComponentsRequest $args
     * @return ListFlexComponentsResponse
     */
    public function listFlexComponents(ListFlexComponentsRequest $args)
    {
        $result = parent::listFlexComponents($args->toArray());
        return new ListFlexComponentsResponse($result->toArray());
    }
}
