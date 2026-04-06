<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListLFTagExpressions;

trait ListLFTagExpressionsTrait
{
    /**
     * @param ListLFTagExpressionsRequest $args
     * @return ListLFTagExpressionsResponse
     */
    public function listLFTagExpressions(ListLFTagExpressionsRequest $args)
    {
        $result = parent::listLFTagExpressions($args->toArray());
        return new ListLFTagExpressionsResponse($result->toArray());
    }
}
