<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteContactData;

trait DeleteContactDataTrait
{
    /**
     * @param DeleteContactDataRequest $args
     * @return DeleteContactDataResponse
     */
    public function deleteContactData(DeleteContactDataRequest $args)
    {
        $result = parent::deleteContactData($args->toArray());
        return new DeleteContactDataResponse($result->toArray());
    }
}
