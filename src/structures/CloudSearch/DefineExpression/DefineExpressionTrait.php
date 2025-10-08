<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineExpression;

trait DefineExpressionTrait
{
    /**
     * @param DefineExpressionRequest $args
     * @return DefineExpressionResponse
     */
    public function defineExpression(DefineExpressionRequest $args)
    {
        $result = parent::defineExpression($args->toArray());
        return new DefineExpressionResponse($result->toArray());
    }
}
