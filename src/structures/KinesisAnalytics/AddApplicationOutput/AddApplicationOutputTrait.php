<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationOutput;

trait AddApplicationOutputTrait
{
    /**
     * @param AddApplicationOutputRequest $args
     * @return AddApplicationOutputResponse
     */
    public function addApplicationOutput(AddApplicationOutputRequest $args)
    {
        $result = parent::addApplicationOutput($args->toArray());
        return new AddApplicationOutputResponse($result->toArray());
    }
}
