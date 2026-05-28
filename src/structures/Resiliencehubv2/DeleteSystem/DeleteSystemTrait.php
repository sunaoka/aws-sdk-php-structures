<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteSystem;

trait DeleteSystemTrait
{
    /**
     * @param DeleteSystemRequest $args
     * @return DeleteSystemResponse
     */
    public function deleteSystem(DeleteSystemRequest $args)
    {
        $result = parent::deleteSystem($args->toArray());
        return new DeleteSystemResponse($result->toArray());
    }
}
