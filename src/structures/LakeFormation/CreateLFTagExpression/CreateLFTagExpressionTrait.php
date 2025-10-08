<?php

namespace Sunaoka\Aws\Structures\LakeFormation\CreateLFTagExpression;

trait CreateLFTagExpressionTrait
{
    /**
     * @param CreateLFTagExpressionRequest $args
     * @return CreateLFTagExpressionResponse
     */
    public function createLFTagExpression(CreateLFTagExpressionRequest $args)
    {
        $result = parent::createLFTagExpression($args->toArray());
        return new CreateLFTagExpressionResponse($result->toArray());
    }
}
