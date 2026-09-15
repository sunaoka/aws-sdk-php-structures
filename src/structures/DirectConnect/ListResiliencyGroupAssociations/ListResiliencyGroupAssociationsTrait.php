<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListResiliencyGroupAssociations;

trait ListResiliencyGroupAssociationsTrait
{
    /**
     * @param ListResiliencyGroupAssociationsRequest $args
     * @return ListResiliencyGroupAssociationsResponse
     */
    public function listResiliencyGroupAssociations(ListResiliencyGroupAssociationsRequest $args)
    {
        $result = parent::listResiliencyGroupAssociations($args->toArray());
        return new ListResiliencyGroupAssociationsResponse($result->toArray());
    }
}
