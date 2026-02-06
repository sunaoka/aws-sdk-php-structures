<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteConnectionType;

trait DeleteConnectionTypeTrait
{
    /**
     * @param DeleteConnectionTypeRequest $args
     * @return DeleteConnectionTypeResponse
     */
    public function deleteConnectionType(DeleteConnectionTypeRequest $args)
    {
        $result = parent::deleteConnectionType($args->toArray());
        return new DeleteConnectionTypeResponse($result->toArray());
    }
}
