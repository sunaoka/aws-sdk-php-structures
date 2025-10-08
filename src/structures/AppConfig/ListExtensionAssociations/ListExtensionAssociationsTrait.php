<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExtensionAssociations;

trait ListExtensionAssociationsTrait
{
    /**
     * @param ListExtensionAssociationsRequest $args
     * @return ListExtensionAssociationsResponse
     */
    public function listExtensionAssociations(ListExtensionAssociationsRequest $args)
    {
        $result = parent::listExtensionAssociations($args->toArray());
        return new ListExtensionAssociationsResponse($result->toArray());
    }
}
