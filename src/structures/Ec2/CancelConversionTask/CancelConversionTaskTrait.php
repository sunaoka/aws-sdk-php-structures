<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelConversionTask;

trait CancelConversionTaskTrait
{
    /**
     * @param CancelConversionTaskRequest $args
     * @return void
     */
    public function cancelConversionTask(CancelConversionTaskRequest $args)
    {
        parent::cancelConversionTask($args->toArray());
    }
}
