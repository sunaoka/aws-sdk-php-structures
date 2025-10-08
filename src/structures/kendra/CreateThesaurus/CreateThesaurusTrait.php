<?php

namespace Sunaoka\Aws\Structures\kendra\CreateThesaurus;

trait CreateThesaurusTrait
{
    /**
     * @param CreateThesaurusRequest $args
     * @return CreateThesaurusResponse
     */
    public function createThesaurus(CreateThesaurusRequest $args)
    {
        $result = parent::createThesaurus($args->toArray());
        return new CreateThesaurusResponse($result->toArray());
    }
}
