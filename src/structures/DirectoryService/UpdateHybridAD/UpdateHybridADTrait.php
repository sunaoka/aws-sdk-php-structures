<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateHybridAD;

trait UpdateHybridADTrait
{
    /**
     * @param UpdateHybridADRequest $args
     * @return UpdateHybridADResponse
     */
    public function updateHybridAD(UpdateHybridADRequest $args)
    {
        $result = parent::updateHybridAD($args->toArray());
        return new UpdateHybridADResponse($result->toArray());
    }
}
