<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateLambdaFunction;

trait DisassociateLambdaFunctionTrait
{
    /**
     * @param DisassociateLambdaFunctionRequest $args
     * @return void
     */
    public function disassociateLambdaFunction(DisassociateLambdaFunctionRequest $args)
    {
        parent::disassociateLambdaFunction($args->toArray());
    }
}
