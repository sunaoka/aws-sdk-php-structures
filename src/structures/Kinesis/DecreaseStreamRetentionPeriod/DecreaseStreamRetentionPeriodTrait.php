<?php

namespace Sunaoka\Aws\Structures\Kinesis\DecreaseStreamRetentionPeriod;

trait DecreaseStreamRetentionPeriodTrait
{
    /**
     * @param DecreaseStreamRetentionPeriodRequest $args
     * @return void
     */
    public function decreaseStreamRetentionPeriod(DecreaseStreamRetentionPeriodRequest $args)
    {
        parent::decreaseStreamRetentionPeriod($args->toArray());
    }
}
