<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyActivityStream;

trait ModifyActivityStreamTrait
{
    /**
     * @param ModifyActivityStreamRequest $args
     * @return ModifyActivityStreamResponse
     */
    public function modifyActivityStream(ModifyActivityStreamRequest $args)
    {
        $result = parent::modifyActivityStream($args->toArray());
        return new ModifyActivityStreamResponse($result->toArray());
    }
}
