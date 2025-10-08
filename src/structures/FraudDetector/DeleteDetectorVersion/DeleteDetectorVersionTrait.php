<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteDetectorVersion;

trait DeleteDetectorVersionTrait
{
    /**
     * @param DeleteDetectorVersionRequest $args
     * @return DeleteDetectorVersionResponse
     */
    public function deleteDetectorVersion(DeleteDetectorVersionRequest $args)
    {
        $result = parent::deleteDetectorVersion($args->toArray());
        return new DeleteDetectorVersionResponse($result->toArray());
    }
}
