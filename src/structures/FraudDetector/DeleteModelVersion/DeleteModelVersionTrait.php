<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteModelVersion;

trait DeleteModelVersionTrait
{
    /**
     * @param DeleteModelVersionRequest $args
     * @return DeleteModelVersionResponse
     */
    public function deleteModelVersion(DeleteModelVersionRequest $args)
    {
        $result = parent::deleteModelVersion($args->toArray());
        return new DeleteModelVersionResponse($result->toArray());
    }
}
