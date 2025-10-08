<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLens;

trait GetLensTrait
{
    /**
     * @param GetLensRequest $args
     * @return GetLensResponse
     */
    public function getLens(GetLensRequest $args)
    {
        $result = parent::getLens($args->toArray());
        return new GetLensResponse($result->toArray());
    }
}
