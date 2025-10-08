<?php

namespace Sunaoka\Aws\Structures\Redshift\DisassociateDataShareConsumer;

trait DisassociateDataShareConsumerTrait
{
    /**
     * @param DisassociateDataShareConsumerRequest $args
     * @return DisassociateDataShareConsumerResponse
     */
    public function disassociateDataShareConsumer(DisassociateDataShareConsumerRequest $args)
    {
        $result = parent::disassociateDataShareConsumer($args->toArray());
        return new DisassociateDataShareConsumerResponse($result->toArray());
    }
}
