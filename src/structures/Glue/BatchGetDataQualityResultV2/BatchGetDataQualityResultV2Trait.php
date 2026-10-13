<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityResultV2;

trait BatchGetDataQualityResultV2Trait
{
    /**
     * @param BatchGetDataQualityResultV2Request $args
     * @return BatchGetDataQualityResultV2Response
     */
    public function batchGetDataQualityResultV2(BatchGetDataQualityResultV2Request $args)
    {
        $result = parent::batchGetDataQualityResultV2($args->toArray());
        return new BatchGetDataQualityResultV2Response($result->toArray());
    }
}
