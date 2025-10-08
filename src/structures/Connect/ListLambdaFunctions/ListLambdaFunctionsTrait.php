<?php

namespace Sunaoka\Aws\Structures\Connect\ListLambdaFunctions;

trait ListLambdaFunctionsTrait
{
    /**
     * @param ListLambdaFunctionsRequest $args
     * @return ListLambdaFunctionsResponse
     */
    public function listLambdaFunctions(ListLambdaFunctionsRequest $args)
    {
        $result = parent::listLambdaFunctions($args->toArray());
        return new ListLambdaFunctionsResponse($result->toArray());
    }
}
