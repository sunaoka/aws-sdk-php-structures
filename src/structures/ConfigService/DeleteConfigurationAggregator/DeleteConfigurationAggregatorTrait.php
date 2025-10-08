<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeleteConfigurationAggregator;

trait DeleteConfigurationAggregatorTrait
{
    /**
     * @param DeleteConfigurationAggregatorRequest $args
     * @return void
     */
    public function deleteConfigurationAggregator(DeleteConfigurationAggregatorRequest $args)
    {
        parent::deleteConfigurationAggregator($args->toArray());
    }
}
