<?php

namespace Sunaoka\Aws\Structures\B2bi\DeleteTransformer;

trait DeleteTransformerTrait
{
    /**
     * @param DeleteTransformerRequest $args
     * @return void
     */
    public function deleteTransformer(DeleteTransformerRequest $args)
    {
        parent::deleteTransformer($args->toArray());
    }
}
