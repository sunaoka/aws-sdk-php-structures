<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateGlossaryTerm;

trait UpdateGlossaryTermTrait
{
    /**
     * @param UpdateGlossaryTermRequest $args
     * @return UpdateGlossaryTermResponse
     */
    public function updateGlossaryTerm(UpdateGlossaryTermRequest $args)
    {
        $result = parent::updateGlossaryTerm($args->toArray());
        return new UpdateGlossaryTermResponse($result->toArray());
    }
}
