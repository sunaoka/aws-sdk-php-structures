<?php

namespace Sunaoka\Aws\Structures\ElementalInference\DeleteQuestionSetVersion;

trait DeleteQuestionSetVersionTrait
{
    /**
     * @param DeleteQuestionSetVersionRequest $args
     * @return DeleteQuestionSetVersionResponse
     */
    public function deleteQuestionSetVersion(DeleteQuestionSetVersionRequest $args)
    {
        $result = parent::deleteQuestionSetVersion($args->toArray());
        return new DeleteQuestionSetVersionResponse($result->toArray());
    }
}
