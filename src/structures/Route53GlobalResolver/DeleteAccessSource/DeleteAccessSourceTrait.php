<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteAccessSource;

trait DeleteAccessSourceTrait
{
    /**
     * @param DeleteAccessSourceRequest $args
     * @return DeleteAccessSourceResponse
     */
    public function deleteAccessSource(DeleteAccessSourceRequest $args)
    {
        $result = parent::deleteAccessSource($args->toArray());
        return new DeleteAccessSourceResponse($result->toArray());
    }
}
