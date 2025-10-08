<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeEffectivePatchesForPatchBaseline;

trait DescribeEffectivePatchesForPatchBaselineTrait
{
    /**
     * @param DescribeEffectivePatchesForPatchBaselineRequest $args
     * @return DescribeEffectivePatchesForPatchBaselineResponse
     */
    public function describeEffectivePatchesForPatchBaseline(DescribeEffectivePatchesForPatchBaselineRequest $args)
    {
        $result = parent::describeEffectivePatchesForPatchBaseline($args->toArray());
        return new DescribeEffectivePatchesForPatchBaselineResponse($result->toArray());
    }
}
