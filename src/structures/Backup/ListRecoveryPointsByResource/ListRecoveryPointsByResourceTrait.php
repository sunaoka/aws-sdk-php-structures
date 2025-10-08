<?php

namespace Sunaoka\Aws\Structures\Backup\ListRecoveryPointsByResource;

trait ListRecoveryPointsByResourceTrait
{
    /**
     * @param ListRecoveryPointsByResourceRequest $args
     * @return ListRecoveryPointsByResourceResponse
     */
    public function listRecoveryPointsByResource(ListRecoveryPointsByResourceRequest $args)
    {
        $result = parent::listRecoveryPointsByResource($args->toArray());
        return new ListRecoveryPointsByResourceResponse($result->toArray());
    }
}
