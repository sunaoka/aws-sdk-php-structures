<?php

namespace Sunaoka\Aws\Structures\EKS\CancelUpdate;

trait CancelUpdateTrait
{
    /**
     * @param CancelUpdateRequest $args
     * @return CancelUpdateResponse
     */
    public function cancelUpdate(CancelUpdateRequest $args)
    {
        $result = parent::cancelUpdate($args->toArray());
        return new CancelUpdateResponse($result->toArray());
    }
}
