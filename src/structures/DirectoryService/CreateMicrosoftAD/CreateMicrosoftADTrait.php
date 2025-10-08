<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateMicrosoftAD;

trait CreateMicrosoftADTrait
{
    /**
     * @param CreateMicrosoftADRequest $args
     * @return CreateMicrosoftADResponse
     */
    public function createMicrosoftAD(CreateMicrosoftADRequest $args)
    {
        $result = parent::createMicrosoftAD($args->toArray());
        return new CreateMicrosoftADResponse($result->toArray());
    }
}
