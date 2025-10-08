<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DeleteServiceAction;

trait DeleteServiceActionTrait
{
    /**
     * @param DeleteServiceActionRequest $args
     * @return DeleteServiceActionResponse
     */
    public function deleteServiceAction(DeleteServiceActionRequest $args)
    {
        $result = parent::deleteServiceAction($args->toArray());
        return new DeleteServiceActionResponse($result->toArray());
    }
}
