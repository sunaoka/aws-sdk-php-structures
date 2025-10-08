<?php

namespace Sunaoka\Aws\Structures\Comprehend\StopTrainingDocumentClassifier;

trait StopTrainingDocumentClassifierTrait
{
    /**
     * @param StopTrainingDocumentClassifierRequest $args
     * @return StopTrainingDocumentClassifierResponse
     */
    public function stopTrainingDocumentClassifier(StopTrainingDocumentClassifierRequest $args)
    {
        $result = parent::stopTrainingDocumentClassifier($args->toArray());
        return new StopTrainingDocumentClassifierResponse($result->toArray());
    }
}
