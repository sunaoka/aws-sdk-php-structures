<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityResultV2;

trait GetDataQualityResultV2Trait
{
    /**
     * @param GetDataQualityResultV2Request $args
     * @return GetDataQualityResultV2Response
     */
    public function getDataQualityResultV2(GetDataQualityResultV2Request $args)
    {
        $result = parent::getDataQualityResultV2($args->toArray());
        return new GetDataQualityResultV2Response($result->toArray());
    }
}
