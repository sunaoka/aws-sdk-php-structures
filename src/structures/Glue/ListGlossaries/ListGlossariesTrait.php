<?php

namespace Sunaoka\Aws\Structures\Glue\ListGlossaries;

trait ListGlossariesTrait
{
    /**
     * @param ListGlossariesRequest $args
     * @return ListGlossariesResponse
     */
    public function listGlossaries(ListGlossariesRequest $args)
    {
        $result = parent::listGlossaries($args->toArray());
        return new ListGlossariesResponse($result->toArray());
    }
}
