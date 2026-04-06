<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetAccessSource;

trait GetAccessSourceTrait
{
    /**
     * @param GetAccessSourceRequest $args
     * @return GetAccessSourceResponse
     */
    public function getAccessSource(GetAccessSourceRequest $args)
    {
        $result = parent::getAccessSource($args->toArray());
        return new GetAccessSourceResponse($result->toArray());
    }
}
