<?php

namespace Sunaoka\Aws\Structures\ConnectCases\DeleteField;

trait DeleteFieldTrait
{
    /**
     * @param DeleteFieldRequest $args
     * @return DeleteFieldResponse
     */
    public function deleteField(DeleteFieldRequest $args)
    {
        $result = parent::deleteField($args->toArray());
        return new DeleteFieldResponse($result->toArray());
    }
}
