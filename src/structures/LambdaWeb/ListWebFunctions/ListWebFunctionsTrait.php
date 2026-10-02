<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctions;

trait ListWebFunctionsTrait
{
    /**
     * @param ListWebFunctionsRequest $args
     * @return ListWebFunctionsResponse
     */
    public function listWebFunctions(ListWebFunctionsRequest $args)
    {
        $result = parent::listWebFunctions($args->toArray());
        return new ListWebFunctionsResponse($result->toArray());
    }
}
