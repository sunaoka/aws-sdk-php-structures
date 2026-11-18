<?php

namespace Sunaoka\Aws\Structures\mgn\ListRemoteSourceActionInvocations;

trait ListRemoteSourceActionInvocationsTrait
{
    /**
     * @param ListRemoteSourceActionInvocationsRequest $args
     * @return ListRemoteSourceActionInvocationsResponse
     */
    public function listRemoteSourceActionInvocations(ListRemoteSourceActionInvocationsRequest $args)
    {
        $result = parent::listRemoteSourceActionInvocations($args->toArray());
        return new ListRemoteSourceActionInvocationsResponse($result->toArray());
    }
}
