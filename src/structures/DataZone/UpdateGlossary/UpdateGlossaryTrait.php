<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossary;

trait UpdateGlossaryTrait
{
    /**
     * @param UpdateGlossaryRequest $args
     * @return UpdateGlossaryResponse
     */
    public function updateGlossary(UpdateGlossaryRequest $args)
    {
        $result = parent::updateGlossary($args->toArray());
        return new UpdateGlossaryResponse($result->toArray());
    }
}
