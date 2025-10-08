<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteIndexField;

trait DeleteIndexFieldTrait
{
    /**
     * @param DeleteIndexFieldRequest $args
     * @return DeleteIndexFieldResponse
     */
    public function deleteIndexField(DeleteIndexFieldRequest $args)
    {
        $result = parent::deleteIndexField($args->toArray());
        return new DeleteIndexFieldResponse($result->toArray());
    }
}
