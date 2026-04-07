<?php

namespace Sunaoka\Aws\Structures\S3Files\ListMountTargets;

trait ListMountTargetsTrait
{
    /**
     * @param ListMountTargetsRequest $args
     * @return ListMountTargetsResponse
     */
    public function listMountTargets(ListMountTargetsRequest $args)
    {
        $result = parent::listMountTargets($args->toArray());
        return new ListMountTargetsResponse($result->toArray());
    }
}
