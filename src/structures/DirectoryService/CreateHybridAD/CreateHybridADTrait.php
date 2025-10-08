<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateHybridAD;

trait CreateHybridADTrait
{
    /**
     * @param CreateHybridADRequest $args
     * @return CreateHybridADResponse
     */
    public function createHybridAD(CreateHybridADRequest $args)
    {
        $result = parent::createHybridAD($args->toArray());
        return new CreateHybridADResponse($result->toArray());
    }
}
