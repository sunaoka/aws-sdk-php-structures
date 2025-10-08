<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAutoMLJobV2;

trait CreateAutoMLJobV2Trait
{
    /**
     * @param CreateAutoMLJobV2Request $args
     * @return CreateAutoMLJobV2Response
     */
    public function createAutoMLJobV2(CreateAutoMLJobV2Request $args)
    {
        $result = parent::createAutoMLJobV2($args->toArray());
        return new CreateAutoMLJobV2Response($result->toArray());
    }
}
