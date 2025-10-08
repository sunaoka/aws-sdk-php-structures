<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetWorkUnits;

trait GetWorkUnitsTrait
{
    /**
     * @param GetWorkUnitsRequest $args
     * @return GetWorkUnitsResponse
     */
    public function getWorkUnits(GetWorkUnitsRequest $args)
    {
        $result = parent::getWorkUnits($args->toArray());
        return new GetWorkUnitsResponse($result->toArray());
    }
}
