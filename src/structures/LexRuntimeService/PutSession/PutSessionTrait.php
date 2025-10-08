<?php

namespace Sunaoka\Aws\Structures\LexRuntimeService\PutSession;

trait PutSessionTrait
{
    /**
     * @param PutSessionRequest $args
     * @return PutSessionResponse
     */
    public function putSession(PutSessionRequest $args)
    {
        $result = parent::putSession($args->toArray());
        return new PutSessionResponse($result->toArray());
    }
}
