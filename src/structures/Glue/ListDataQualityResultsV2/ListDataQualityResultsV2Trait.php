<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityResultsV2;

trait ListDataQualityResultsV2Trait
{
    /**
     * @param ListDataQualityResultsV2Request $args
     * @return ListDataQualityResultsV2Response
     */
    public function listDataQualityResultsV2(ListDataQualityResultsV2Request $args)
    {
        $result = parent::listDataQualityResultsV2($args->toArray());
        return new ListDataQualityResultsV2Response($result->toArray());
    }
}
