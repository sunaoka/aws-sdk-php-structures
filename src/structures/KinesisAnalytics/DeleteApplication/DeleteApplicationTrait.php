<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\DeleteApplication;

trait DeleteApplicationTrait
{
    /**
     * @param DeleteApplicationRequest $args
     * @return DeleteApplicationResponse
     */
    public function deleteApplication(DeleteApplicationRequest $args)
    {
        $result = parent::deleteApplication($args->toArray());
        return new DeleteApplicationResponse($result->toArray());
    }
}
