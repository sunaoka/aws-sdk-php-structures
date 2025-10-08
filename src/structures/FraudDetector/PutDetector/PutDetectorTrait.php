<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutDetector;

trait PutDetectorTrait
{
    /**
     * @param PutDetectorRequest $args
     * @return PutDetectorResponse
     */
    public function putDetector(PutDetectorRequest $args)
    {
        $result = parent::putDetector($args->toArray());
        return new PutDetectorResponse($result->toArray());
    }
}
