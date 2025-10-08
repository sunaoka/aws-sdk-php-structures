<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListFraudsters;

trait ListFraudstersTrait
{
    /**
     * @param ListFraudstersRequest $args
     * @return ListFraudstersResponse
     */
    public function listFraudsters(ListFraudstersRequest $args)
    {
        $result = parent::listFraudsters($args->toArray());
        return new ListFraudstersResponse($result->toArray());
    }
}
