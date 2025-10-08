<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\UpdateTestSet;

trait UpdateTestSetTrait
{
    /**
     * @param UpdateTestSetRequest $args
     * @return UpdateTestSetResponse
     */
    public function updateTestSet(UpdateTestSetRequest $args)
    {
        $result = parent::updateTestSet($args->toArray());
        return new UpdateTestSetResponse($result->toArray());
    }
}
