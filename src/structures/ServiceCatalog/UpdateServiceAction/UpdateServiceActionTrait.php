<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\UpdateServiceAction;

trait UpdateServiceActionTrait
{
    /**
     * @param UpdateServiceActionRequest $args
     * @return UpdateServiceActionResponse
     */
    public function updateServiceAction(UpdateServiceActionRequest $args)
    {
        $result = parent::updateServiceAction($args->toArray());
        return new UpdateServiceActionResponse($result->toArray());
    }
}
