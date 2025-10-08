<?php

namespace Sunaoka\Aws\Structures\Polly\DeleteLexicon;

trait DeleteLexiconTrait
{
    /**
     * @param DeleteLexiconRequest $args
     * @return DeleteLexiconResponse
     */
    public function deleteLexicon(DeleteLexiconRequest $args)
    {
        $result = parent::deleteLexicon($args->toArray());
        return new DeleteLexiconResponse($result->toArray());
    }
}
