<?php

namespace Sunaoka\Aws\Structures\Glue\PublishDataQualityResultV2;

trait PublishDataQualityResultV2Trait
{
    /**
     * @param PublishDataQualityResultV2Request $args
     * @return PublishDataQualityResultV2Response
     */
    public function publishDataQualityResultV2(PublishDataQualityResultV2Request $args)
    {
        $result = parent::publishDataQualityResultV2($args->toArray());
        return new PublishDataQualityResultV2Response($result->toArray());
    }
}
