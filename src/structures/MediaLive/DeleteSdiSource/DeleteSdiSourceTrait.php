<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteSdiSource;

trait DeleteSdiSourceTrait
{
    /**
     * @param DeleteSdiSourceRequest $args
     * @return DeleteSdiSourceResponse
     */
    public function deleteSdiSource(DeleteSdiSourceRequest $args)
    {
        $result = parent::deleteSdiSource($args->toArray());
        return new DeleteSdiSourceResponse($result->toArray());
    }
}
