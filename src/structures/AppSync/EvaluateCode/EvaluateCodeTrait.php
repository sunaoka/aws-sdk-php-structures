<?php

namespace Sunaoka\Aws\Structures\AppSync\EvaluateCode;

trait EvaluateCodeTrait
{
    /**
     * @param EvaluateCodeRequest $args
     * @return EvaluateCodeResponse
     */
    public function evaluateCode(EvaluateCodeRequest $args)
    {
        $result = parent::evaluateCode($args->toArray());
        return new EvaluateCodeResponse($result->toArray());
    }
}
