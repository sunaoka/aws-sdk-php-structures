<?php

namespace Sunaoka\Aws\Structures\Polly\GetLexicon;

trait GetLexiconTrait
{
    /**
     * @param GetLexiconRequest $args
     * @return GetLexiconResponse
     */
    public function getLexicon(GetLexiconRequest $args)
    {
        $result = parent::getLexicon($args->toArray());
        return new GetLexiconResponse($result->toArray());
    }
}
