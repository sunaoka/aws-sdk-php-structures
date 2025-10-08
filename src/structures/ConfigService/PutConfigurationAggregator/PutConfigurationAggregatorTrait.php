<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigurationAggregator;

trait PutConfigurationAggregatorTrait
{
    /**
     * @param PutConfigurationAggregatorRequest $args
     * @return PutConfigurationAggregatorResponse
     */
    public function putConfigurationAggregator(PutConfigurationAggregatorRequest $args)
    {
        $result = parent::putConfigurationAggregator($args->toArray());
        return new PutConfigurationAggregatorResponse($result->toArray());
    }
}
