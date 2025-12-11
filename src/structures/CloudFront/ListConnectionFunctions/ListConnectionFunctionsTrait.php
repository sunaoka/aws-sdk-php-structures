<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConnectionFunctions;

trait ListConnectionFunctionsTrait
{
    /**
     * @param ListConnectionFunctionsRequest $args
     * @return ListConnectionFunctionsResponse
     */
    public function listConnectionFunctions(ListConnectionFunctionsRequest $args)
    {
        $result = parent::listConnectionFunctions($args->toArray());
        return new ListConnectionFunctionsResponse($result->toArray());
    }
}
