<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2;

trait GetFindingV2Trait
{
    /**
     * @param GetFindingV2Request $args
     * @return GetFindingV2Response
     */
    public function getFindingV2(GetFindingV2Request $args)
    {
        $result = parent::getFindingV2($args->toArray());
        return new GetFindingV2Response($result->toArray());
    }
}
