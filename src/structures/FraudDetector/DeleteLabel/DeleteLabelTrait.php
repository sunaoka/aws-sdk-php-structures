<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteLabel;

trait DeleteLabelTrait
{
    /**
     * @param DeleteLabelRequest $args
     * @return DeleteLabelResponse
     */
    public function deleteLabel(DeleteLabelRequest $args)
    {
        $result = parent::deleteLabel($args->toArray());
        return new DeleteLabelResponse($result->toArray());
    }
}
