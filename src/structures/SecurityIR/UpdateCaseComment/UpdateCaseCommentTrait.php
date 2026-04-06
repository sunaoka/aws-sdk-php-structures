<?php

namespace Sunaoka\Aws\Structures\SecurityIR\UpdateCaseComment;

trait UpdateCaseCommentTrait
{
    /**
     * @param UpdateCaseCommentRequest $args
     * @return UpdateCaseCommentResponse
     */
    public function updateCaseComment(UpdateCaseCommentRequest $args)
    {
        $result = parent::updateCaseComment($args->toArray());
        return new UpdateCaseCommentResponse($result->toArray());
    }
}
