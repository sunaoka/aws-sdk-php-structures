<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerEngineTypes;

trait DescribeBrokerEngineTypesTrait
{
    /**
     * @param DescribeBrokerEngineTypesRequest $args
     * @return DescribeBrokerEngineTypesResponse
     */
    public function describeBrokerEngineTypes(DescribeBrokerEngineTypesRequest $args)
    {
        $result = parent::describeBrokerEngineTypes($args->toArray());
        return new DescribeBrokerEngineTypesResponse($result->toArray());
    }
}
