<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindingsV2;

trait BatchUpdateFindingsV2Trait
{
    /**
     * @param BatchUpdateFindingsV2Request $args
     * @return BatchUpdateFindingsV2Response
     */
    public function batchUpdateFindingsV2(BatchUpdateFindingsV2Request $args)
    {
        $result = parent::batchUpdateFindingsV2($args->toArray());
        return new BatchUpdateFindingsV2Response($result->toArray());
    }
}
