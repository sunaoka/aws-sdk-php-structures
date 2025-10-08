<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData;

trait PutMetricDataTrait
{
    /**
     * @param PutMetricDataRequest $args
     * @return void
     */
    public function putMetricData(PutMetricDataRequest $args)
    {
        parent::putMetricData($args->toArray());
    }
}
