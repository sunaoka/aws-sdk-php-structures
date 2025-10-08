<?php

namespace Sunaoka\Aws\Structures\FIS\GetSafetyLever;

trait GetSafetyLeverTrait
{
    /**
     * @param GetSafetyLeverRequest $args
     * @return GetSafetyLeverResponse
     */
    public function getSafetyLever(GetSafetyLeverRequest $args)
    {
        $result = parent::getSafetyLever($args->toArray());
        return new GetSafetyLeverResponse($result->toArray());
    }
}
