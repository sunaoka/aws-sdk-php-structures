<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeBuild;

trait DescribeBuildTrait
{
    /**
     * @param DescribeBuildRequest $args
     * @return DescribeBuildResponse
     */
    public function describeBuild(DescribeBuildRequest $args)
    {
        $result = parent::describeBuild($args->toArray());
        return new DescribeBuildResponse($result->toArray());
    }
}
