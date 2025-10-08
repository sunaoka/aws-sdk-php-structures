<?php

namespace Sunaoka\Aws\Structures\WorkDocs\CreateLabels;

trait CreateLabelsTrait
{
    /**
     * @param CreateLabelsRequest $args
     * @return CreateLabelsResponse
     */
    public function createLabels(CreateLabelsRequest $args)
    {
        $result = parent::createLabels($args->toArray());
        return new CreateLabelsResponse($result->toArray());
    }
}
