<?php

namespace Sunaoka\Aws\Structures\Redshift\RejectDataShare;

trait RejectDataShareTrait
{
    /**
     * @param RejectDataShareRequest $args
     * @return RejectDataShareResponse
     */
    public function rejectDataShare(RejectDataShareRequest $args)
    {
        $result = parent::rejectDataShare($args->toArray());
        return new RejectDataShareResponse($result->toArray());
    }
}
