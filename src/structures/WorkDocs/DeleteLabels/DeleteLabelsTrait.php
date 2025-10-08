<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteLabels;

trait DeleteLabelsTrait
{
    /**
     * @param DeleteLabelsRequest $args
     * @return DeleteLabelsResponse
     */
    public function deleteLabels(DeleteLabelsRequest $args)
    {
        $result = parent::deleteLabels($args->toArray());
        return new DeleteLabelsResponse($result->toArray());
    }
}
