<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationOutput;

trait DeleteApplicationOutputTrait
{
    /**
     * @param DeleteApplicationOutputRequest $args
     * @return DeleteApplicationOutputResponse
     */
    public function deleteApplicationOutput(DeleteApplicationOutputRequest $args)
    {
        $result = parent::deleteApplicationOutput($args->toArray());
        return new DeleteApplicationOutputResponse($result->toArray());
    }
}
