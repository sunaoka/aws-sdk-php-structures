<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\DeleteCrl;

trait DeleteCrlTrait
{
    /**
     * @param DeleteCrlRequest $args
     * @return DeleteCrlResponse
     */
    public function deleteCrl(DeleteCrlRequest $args)
    {
        $result = parent::deleteCrl($args->toArray());
        return new DeleteCrlResponse($result->toArray());
    }
}
