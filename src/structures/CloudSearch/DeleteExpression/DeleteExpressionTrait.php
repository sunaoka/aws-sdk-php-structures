<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteExpression;

trait DeleteExpressionTrait
{
    /**
     * @param DeleteExpressionRequest $args
     * @return DeleteExpressionResponse
     */
    public function deleteExpression(DeleteExpressionRequest $args)
    {
        $result = parent::deleteExpression($args->toArray());
        return new DeleteExpressionResponse($result->toArray());
    }
}
