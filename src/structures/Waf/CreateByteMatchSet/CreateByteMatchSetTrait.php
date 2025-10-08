<?php

namespace Sunaoka\Aws\Structures\Waf\CreateByteMatchSet;

trait CreateByteMatchSetTrait
{
    /**
     * @param CreateByteMatchSetRequest $args
     * @return CreateByteMatchSetResponse
     */
    public function createByteMatchSet(CreateByteMatchSetRequest $args)
    {
        $result = parent::createByteMatchSet($args->toArray());
        return new CreateByteMatchSetResponse($result->toArray());
    }
}
