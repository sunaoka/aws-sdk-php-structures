<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer;

trait UpdateTransformerTrait
{
    /**
     * @param UpdateTransformerRequest $args
     * @return UpdateTransformerResponse
     */
    public function updateTransformer(UpdateTransformerRequest $args)
    {
        $result = parent::updateTransformer($args->toArray());
        return new UpdateTransformerResponse($result->toArray());
    }
}
