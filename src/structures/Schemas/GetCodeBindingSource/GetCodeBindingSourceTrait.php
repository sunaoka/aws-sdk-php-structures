<?php

namespace Sunaoka\Aws\Structures\Schemas\GetCodeBindingSource;

trait GetCodeBindingSourceTrait
{
    /**
     * @param GetCodeBindingSourceRequest $args
     * @return GetCodeBindingSourceResponse
     */
    public function getCodeBindingSource(GetCodeBindingSourceRequest $args)
    {
        $result = parent::getCodeBindingSource($args->toArray());
        return new GetCodeBindingSourceResponse($result->toArray());
    }
}
