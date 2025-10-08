<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchBaselines;

trait DescribePatchBaselinesTrait
{
    /**
     * @param DescribePatchBaselinesRequest $args
     * @return DescribePatchBaselinesResponse
     */
    public function describePatchBaselines(DescribePatchBaselinesRequest $args)
    {
        $result = parent::describePatchBaselines($args->toArray());
        return new DescribePatchBaselinesResponse($result->toArray());
    }
}
