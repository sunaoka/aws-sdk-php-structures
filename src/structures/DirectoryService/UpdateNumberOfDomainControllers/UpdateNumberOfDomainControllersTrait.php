<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateNumberOfDomainControllers;

trait UpdateNumberOfDomainControllersTrait
{
    /**
     * @param UpdateNumberOfDomainControllersRequest $args
     * @return UpdateNumberOfDomainControllersResponse
     */
    public function updateNumberOfDomainControllers(UpdateNumberOfDomainControllersRequest $args)
    {
        $result = parent::updateNumberOfDomainControllers($args->toArray());
        return new UpdateNumberOfDomainControllersResponse($result->toArray());
    }
}
