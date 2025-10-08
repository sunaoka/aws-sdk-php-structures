<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensVersionDifference;

trait GetLensVersionDifferenceTrait
{
    /**
     * @param GetLensVersionDifferenceRequest $args
     * @return GetLensVersionDifferenceResponse
     */
    public function getLensVersionDifference(GetLensVersionDifferenceRequest $args)
    {
        $result = parent::getLensVersionDifference($args->toArray());
        return new GetLensVersionDifferenceResponse($result->toArray());
    }
}
