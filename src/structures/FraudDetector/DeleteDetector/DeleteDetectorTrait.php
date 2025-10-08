<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteDetector;

trait DeleteDetectorTrait
{
    /**
     * @param DeleteDetectorRequest $args
     * @return DeleteDetectorResponse
     */
    public function deleteDetector(DeleteDetectorRequest $args)
    {
        $result = parent::deleteDetector($args->toArray());
        return new DeleteDetectorResponse($result->toArray());
    }
}
