<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Suggest;

trait SuggestTrait
{
    /**
     * @param SuggestRequest $args
     * @return SuggestResponse
     */
    public function suggest(SuggestRequest $args)
    {
        $result = parent::suggest($args->toArray());
        return new SuggestResponse($result->toArray());
    }
}
