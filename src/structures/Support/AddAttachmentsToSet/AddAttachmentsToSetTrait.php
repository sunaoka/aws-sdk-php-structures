<?php

namespace Sunaoka\Aws\Structures\Support\AddAttachmentsToSet;

trait AddAttachmentsToSetTrait
{
    /**
     * @param AddAttachmentsToSetRequest $args
     * @return AddAttachmentsToSetResponse
     */
    public function addAttachmentsToSet(AddAttachmentsToSetRequest $args)
    {
        $result = parent::addAttachmentsToSet($args->toArray());
        return new AddAttachmentsToSetResponse($result->toArray());
    }
}
