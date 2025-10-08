<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\ListAccessors;

trait ListAccessorsTrait
{
    /**
     * @param ListAccessorsRequest $args
     * @return ListAccessorsResponse
     */
    public function listAccessors(ListAccessorsRequest $args)
    {
        $result = parent::listAccessors($args->toArray());
        return new ListAccessorsResponse($result->toArray());
    }
}
