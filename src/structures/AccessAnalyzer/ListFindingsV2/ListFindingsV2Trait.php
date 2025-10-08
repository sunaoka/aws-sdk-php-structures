<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListFindingsV2;

trait ListFindingsV2Trait
{
    /**
     * @param ListFindingsV2Request $args
     * @return ListFindingsV2Response
     */
    public function listFindingsV2(ListFindingsV2Request $args)
    {
        $result = parent::listFindingsV2($args->toArray());
        return new ListFindingsV2Response($result->toArray());
    }
}
