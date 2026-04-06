<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAssistantAssociations;

trait ListAssistantAssociationsTrait
{
    /**
     * @param ListAssistantAssociationsRequest $args
     * @return ListAssistantAssociationsResponse
     */
    public function listAssistantAssociations(ListAssistantAssociationsRequest $args)
    {
        $result = parent::listAssistantAssociations($args->toArray());
        return new ListAssistantAssociationsResponse($result->toArray());
    }
}
