<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineSuggester;

trait DefineSuggesterTrait
{
    /**
     * @param DefineSuggesterRequest $args
     * @return DefineSuggesterResponse
     */
    public function defineSuggester(DefineSuggesterRequest $args)
    {
        $result = parent::defineSuggester($args->toArray());
        return new DefineSuggesterResponse($result->toArray());
    }
}
