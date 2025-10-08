<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetLabels;

trait GetLabelsTrait
{
    /**
     * @param GetLabelsRequest $args
     * @return GetLabelsResponse
     */
    public function getLabels(GetLabelsRequest $args)
    {
        $result = parent::getLabels($args->toArray());
        return new GetLabelsResponse($result->toArray());
    }
}
