<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateLFTagExpression;

trait UpdateLFTagExpressionTrait
{
    /**
     * @param UpdateLFTagExpressionRequest $args
     * @return UpdateLFTagExpressionResponse
     */
    public function updateLFTagExpression(UpdateLFTagExpressionRequest $args)
    {
        $result = parent::updateLFTagExpression($args->toArray());
        return new UpdateLFTagExpressionResponse($result->toArray());
    }
}
