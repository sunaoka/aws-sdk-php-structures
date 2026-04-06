<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLFTagExpression;

trait DeleteLFTagExpressionTrait
{
    /**
     * @param DeleteLFTagExpressionRequest $args
     * @return DeleteLFTagExpressionResponse
     */
    public function deleteLFTagExpression(DeleteLFTagExpressionRequest $args)
    {
        $result = parent::deleteLFTagExpression($args->toArray());
        return new DeleteLFTagExpressionResponse($result->toArray());
    }
}
