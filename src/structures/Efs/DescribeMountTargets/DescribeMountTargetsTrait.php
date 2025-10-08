<?php

namespace Sunaoka\Aws\Structures\Efs\DescribeMountTargets;

trait DescribeMountTargetsTrait
{
    /**
     * @param DescribeMountTargetsRequest $args
     * @return DescribeMountTargetsResponse
     */
    public function describeMountTargets(DescribeMountTargetsRequest $args)
    {
        $result = parent::describeMountTargets($args->toArray());
        return new DescribeMountTargetsResponse($result->toArray());
    }
}
