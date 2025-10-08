<?php

namespace Sunaoka\Aws\Structures\TranscribeService\ListVocabularies;

trait ListVocabulariesTrait
{
    /**
     * @param ListVocabulariesRequest $args
     * @return ListVocabulariesResponse
     */
    public function listVocabularies(ListVocabulariesRequest $args)
    {
        $result = parent::listVocabularies($args->toArray());
        return new ListVocabulariesResponse($result->toArray());
    }
}
