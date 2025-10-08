<?php

namespace Sunaoka\Aws\Structures\SecurityLake\DeleteCustomLogSource;

trait DeleteCustomLogSourceTrait
{
    /**
     * @param DeleteCustomLogSourceRequest $args
     * @return DeleteCustomLogSourceResponse
     */
    public function deleteCustomLogSource(DeleteCustomLogSourceRequest $args)
    {
        $result = parent::deleteCustomLogSource($args->toArray());
        return new DeleteCustomLogSourceResponse($result->toArray());
    }
}
