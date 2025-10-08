<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateDefaultVocabulary;

trait AssociateDefaultVocabularyTrait
{
    /**
     * @param AssociateDefaultVocabularyRequest $args
     * @return AssociateDefaultVocabularyResponse
     */
    public function associateDefaultVocabulary(AssociateDefaultVocabularyRequest $args)
    {
        $result = parent::associateDefaultVocabulary($args->toArray());
        return new AssociateDefaultVocabularyResponse($result->toArray());
    }
}
