<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetLFTagExpression;

trait GetLFTagExpressionTrait
{
    /**
     * @param GetLFTagExpressionRequest $args
     * @return GetLFTagExpressionResponse
     */
    public function getLFTagExpression(GetLFTagExpressionRequest $args)
    {
        $result = parent::getLFTagExpression($args->toArray());
        return new GetLFTagExpressionResponse($result->toArray());
    }
}
