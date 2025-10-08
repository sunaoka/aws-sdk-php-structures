<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteGlossary;

trait DeleteGlossaryTrait
{
    /**
     * @param DeleteGlossaryRequest $args
     * @return DeleteGlossaryResponse
     */
    public function deleteGlossary(DeleteGlossaryRequest $args)
    {
        $result = parent::deleteGlossary($args->toArray());
        return new DeleteGlossaryResponse($result->toArray());
    }
}
