<?php

namespace Sunaoka\Aws\Structures\Polly\PutLexicon;

trait PutLexiconTrait
{
    /**
     * @param PutLexiconRequest $args
     * @return PutLexiconResponse
     */
    public function putLexicon(PutLexiconRequest $args)
    {
        $result = parent::putLexicon($args->toArray());
        return new PutLexiconResponse($result->toArray());
    }
}
