<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppSession;

trait UpdateQAppSessionTrait
{
    /**
     * @param UpdateQAppSessionRequest $args
     * @return UpdateQAppSessionResponse
     */
    public function updateQAppSession(UpdateQAppSessionRequest $args)
    {
        $result = parent::updateQAppSession($args->toArray());
        return new UpdateQAppSessionResponse($result->toArray());
    }
}
