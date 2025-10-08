<?php

namespace Sunaoka\Aws\Structures\OAM\GetSink;

trait GetSinkTrait
{
    /**
     * @param GetSinkRequest $args
     * @return GetSinkResponse
     */
    public function getSink(GetSinkRequest $args)
    {
        $result = parent::getSink($args->toArray());
        return new GetSinkResponse($result->toArray());
    }
}
