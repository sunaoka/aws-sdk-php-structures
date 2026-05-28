<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeleteInputSource;

trait DeleteInputSourceTrait
{
    /**
     * @param DeleteInputSourceRequest $args
     * @return DeleteInputSourceResponse
     */
    public function deleteInputSource(DeleteInputSourceRequest $args)
    {
        $result = parent::deleteInputSource($args->toArray());
        return new DeleteInputSourceResponse($result->toArray());
    }
}
