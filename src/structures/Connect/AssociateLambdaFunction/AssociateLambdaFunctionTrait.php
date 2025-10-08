<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateLambdaFunction;

trait AssociateLambdaFunctionTrait
{
    /**
     * @param AssociateLambdaFunctionRequest $args
     * @return void
     */
    public function associateLambdaFunction(AssociateLambdaFunctionRequest $args)
    {
        parent::associateLambdaFunction($args->toArray());
    }
}
