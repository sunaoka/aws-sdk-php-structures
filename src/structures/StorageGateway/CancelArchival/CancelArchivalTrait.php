<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CancelArchival;

trait CancelArchivalTrait
{
    /**
     * @param CancelArchivalRequest $args
     * @return CancelArchivalResponse
     */
    public function cancelArchival(CancelArchivalRequest $args)
    {
        $result = parent::cancelArchival($args->toArray());
        return new CancelArchivalResponse($result->toArray());
    }
}
