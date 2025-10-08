<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\Autocomplete;

trait AutocompleteTrait
{
    /**
     * @param AutocompleteRequest $args
     * @return AutocompleteResponse
     */
    public function autocomplete(AutocompleteRequest $args)
    {
        $result = parent::autocomplete($args->toArray());
        return new AutocompleteResponse($result->toArray());
    }
}
