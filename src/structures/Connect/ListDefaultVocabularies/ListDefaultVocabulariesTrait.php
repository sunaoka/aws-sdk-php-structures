<?php

namespace Sunaoka\Aws\Structures\Connect\ListDefaultVocabularies;

trait ListDefaultVocabulariesTrait
{
    /**
     * @param ListDefaultVocabulariesRequest $args
     * @return ListDefaultVocabulariesResponse
     */
    public function listDefaultVocabularies(ListDefaultVocabulariesRequest $args)
    {
        $result = parent::listDefaultVocabularies($args->toArray());
        return new ListDefaultVocabulariesResponse($result->toArray());
    }
}
