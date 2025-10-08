<?php

namespace Sunaoka\Aws\Structures\OAM\DeleteSink;

trait DeleteSinkTrait
{
    /**
     * @param DeleteSinkRequest $args
     * @return DeleteSinkResponse
     */
    public function deleteSink(DeleteSinkRequest $args)
    {
        $result = parent::deleteSink($args->toArray());
        return new DeleteSinkResponse($result->toArray());
    }
}
