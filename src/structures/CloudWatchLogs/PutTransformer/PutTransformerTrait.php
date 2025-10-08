<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer;

trait PutTransformerTrait
{
    /**
     * @param PutTransformerRequest $args
     * @return void
     */
    public function putTransformer(PutTransformerRequest $args)
    {
        parent::putTransformer($args->toArray());
    }
}
