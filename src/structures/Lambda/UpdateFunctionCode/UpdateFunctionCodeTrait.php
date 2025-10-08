<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionCode;

trait UpdateFunctionCodeTrait
{
    /**
     * @param UpdateFunctionCodeRequest $args
     * @return UpdateFunctionCodeResponse
     */
    public function updateFunctionCode(UpdateFunctionCodeRequest $args)
    {
        $result = parent::updateFunctionCode($args->toArray());
        return new UpdateFunctionCodeResponse($result->toArray());
    }
}
