<?php

namespace Sunaoka\Aws\Structures\ComprehendMedical\DetectEntitiesV2;

trait DetectEntitiesV2Trait
{
    /**
     * @param DetectEntitiesV2Request $args
     * @return DetectEntitiesV2Response
     */
    public function detectEntitiesV2(DetectEntitiesV2Request $args)
    {
        $result = parent::detectEntitiesV2($args->toArray());
        return new DetectEntitiesV2Response($result->toArray());
    }
}
