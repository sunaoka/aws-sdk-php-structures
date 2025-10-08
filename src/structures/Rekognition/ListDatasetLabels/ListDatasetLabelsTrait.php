<?php

namespace Sunaoka\Aws\Structures\Rekognition\ListDatasetLabels;

trait ListDatasetLabelsTrait
{
    /**
     * @param ListDatasetLabelsRequest $args
     * @return ListDatasetLabelsResponse
     */
    public function listDatasetLabels(ListDatasetLabelsRequest $args)
    {
        $result = parent::listDatasetLabels($args->toArray());
        return new ListDatasetLabelsResponse($result->toArray());
    }
}
