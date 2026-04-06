<?php

namespace Sunaoka\Aws\Structures\SecurityIR\CreateCaseComment;

trait CreateCaseCommentTrait
{
    /**
     * @param CreateCaseCommentRequest $args
     * @return CreateCaseCommentResponse
     */
    public function createCaseComment(CreateCaseCommentRequest $args)
    {
        $result = parent::createCaseComment($args->toArray());
        return new CreateCaseCommentResponse($result->toArray());
    }
}
