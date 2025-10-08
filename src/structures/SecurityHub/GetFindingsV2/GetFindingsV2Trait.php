<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsV2;

trait GetFindingsV2Trait
{
    /**
     * @param GetFindingsV2Request $args
     * @return GetFindingsV2Response
     */
    public function getFindingsV2(GetFindingsV2Request $args)
    {
        $result = parent::getFindingsV2($args->toArray());
        return new GetFindingsV2Response($result->toArray());
    }
}
