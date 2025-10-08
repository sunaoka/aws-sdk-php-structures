<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateField;

trait UpdateFieldTrait
{
    /**
     * @param UpdateFieldRequest $args
     * @return UpdateFieldResponse
     */
    public function updateField(UpdateFieldRequest $args)
    {
        $result = parent::updateField($args->toArray());
        return new UpdateFieldResponse($result->toArray());
    }
}
