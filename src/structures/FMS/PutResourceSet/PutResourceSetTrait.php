<?php

namespace Sunaoka\Aws\Structures\FMS\PutResourceSet;

trait PutResourceSetTrait
{
    /**
     * @param PutResourceSetRequest $args
     * @return PutResourceSetResponse
     */
    public function putResourceSet(PutResourceSetRequest $args)
    {
        $result = parent::putResourceSet($args->toArray());
        return new PutResourceSetResponse($result->toArray());
    }
}
