<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteDesignation;

trait DeleteDesignationTrait
{
    /**
     * @param DeleteDesignationRequest $args
     * @return DeleteDesignationResponse
     */
    public function deleteDesignation(DeleteDesignationRequest $args)
    {
        $result = parent::deleteDesignation($args->toArray());
        return new DeleteDesignationResponse($result->toArray());
    }
}
