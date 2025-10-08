<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CancelImageCreation;

trait CancelImageCreationTrait
{
    /**
     * @param CancelImageCreationRequest $args
     * @return CancelImageCreationResponse
     */
    public function cancelImageCreation(CancelImageCreationRequest $args)
    {
        $result = parent::cancelImageCreation($args->toArray());
        return new CancelImageCreationResponse($result->toArray());
    }
}
