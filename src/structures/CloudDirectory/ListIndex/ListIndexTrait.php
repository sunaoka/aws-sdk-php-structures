<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIndex;

trait ListIndexTrait
{
    /**
     * @param ListIndexRequest $args
     * @return ListIndexResponse
     */
    public function listIndex(ListIndexRequest $args)
    {
        $result = parent::listIndex($args->toArray());
        return new ListIndexResponse($result->toArray());
    }
}
