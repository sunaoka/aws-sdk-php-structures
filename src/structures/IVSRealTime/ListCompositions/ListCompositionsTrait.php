<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListCompositions;

trait ListCompositionsTrait
{
    /**
     * @param ListCompositionsRequest $args
     * @return ListCompositionsResponse
     */
    public function listCompositions(ListCompositionsRequest $args)
    {
        $result = parent::listCompositions($args->toArray());
        return new ListCompositionsResponse($result->toArray());
    }
}
