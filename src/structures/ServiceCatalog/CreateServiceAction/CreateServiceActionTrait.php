<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\CreateServiceAction;

trait CreateServiceActionTrait
{
    /**
     * @param CreateServiceActionRequest $args
     * @return CreateServiceActionResponse
     */
    public function createServiceAction(CreateServiceActionRequest $args)
    {
        $result = parent::createServiceAction($args->toArray());
        return new CreateServiceActionResponse($result->toArray());
    }
}
