<?php

namespace Sunaoka\Aws\Structures\mgn\UnarchiveApplication;

trait UnarchiveApplicationTrait
{
    /**
     * @param UnarchiveApplicationRequest $args
     * @return UnarchiveApplicationResponse
     */
    public function unarchiveApplication(UnarchiveApplicationRequest $args)
    {
        $result = parent::unarchiveApplication($args->toArray());
        return new UnarchiveApplicationResponse($result->toArray());
    }
}
