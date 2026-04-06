<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateTransformer;

trait CreateTransformerTrait
{
    /**
     * @param CreateTransformerRequest $args
     * @return CreateTransformerResponse
     */
    public function createTransformer(CreateTransformerRequest $args)
    {
        $result = parent::createTransformer($args->toArray());
        return new CreateTransformerResponse($result->toArray());
    }
}
