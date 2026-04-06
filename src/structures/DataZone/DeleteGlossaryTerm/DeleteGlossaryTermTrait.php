<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteGlossaryTerm;

trait DeleteGlossaryTermTrait
{
    /**
     * @param DeleteGlossaryTermRequest $args
     * @return DeleteGlossaryTermResponse
     */
    public function deleteGlossaryTerm(DeleteGlossaryTermRequest $args)
    {
        $result = parent::deleteGlossaryTerm($args->toArray());
        return new DeleteGlossaryTermResponse($result->toArray());
    }
}
