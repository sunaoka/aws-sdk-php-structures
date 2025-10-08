<?php

namespace Sunaoka\Aws\Structures\Redshift\AssociateDataShareConsumer;

trait AssociateDataShareConsumerTrait
{
    /**
     * @param AssociateDataShareConsumerRequest $args
     * @return AssociateDataShareConsumerResponse
     */
    public function associateDataShareConsumer(AssociateDataShareConsumerRequest $args)
    {
        $result = parent::associateDataShareConsumer($args->toArray());
        return new AssociateDataShareConsumerResponse($result->toArray());
    }
}
