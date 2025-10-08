<?php

namespace Sunaoka\Aws\Structures\Kinesis\IncreaseStreamRetentionPeriod;

trait IncreaseStreamRetentionPeriodTrait
{
    /**
     * @param IncreaseStreamRetentionPeriodRequest $args
     * @return void
     */
    public function increaseStreamRetentionPeriod(IncreaseStreamRetentionPeriodRequest $args)
    {
        parent::increaseStreamRetentionPeriod($args->toArray());
    }
}
