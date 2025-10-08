<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutLabel;

trait PutLabelTrait
{
    /**
     * @param PutLabelRequest $args
     * @return PutLabelResponse
     */
    public function putLabel(PutLabelRequest $args)
    {
        $result = parent::putLabel($args->toArray());
        return new PutLabelResponse($result->toArray());
    }
}
