<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxConnectionString;

trait GetKxConnectionStringTrait
{
    /**
     * @param GetKxConnectionStringRequest $args
     * @return GetKxConnectionStringResponse
     */
    public function getKxConnectionString(GetKxConnectionStringRequest $args)
    {
        $result = parent::getKxConnectionString($args->toArray());
        return new GetKxConnectionStringResponse($result->toArray());
    }
}
