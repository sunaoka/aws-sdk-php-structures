<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchGetSecurityControls;

trait BatchGetSecurityControlsTrait
{
    /**
     * @param BatchGetSecurityControlsRequest $args
     * @return BatchGetSecurityControlsResponse
     */
    public function batchGetSecurityControls(BatchGetSecurityControlsRequest $args)
    {
        $result = parent::batchGetSecurityControls($args->toArray());
        return new BatchGetSecurityControlsResponse($result->toArray());
    }
}
