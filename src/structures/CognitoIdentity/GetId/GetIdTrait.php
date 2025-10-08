<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetId;

trait GetIdTrait
{
    /**
     * @param GetIdRequest $args
     * @return GetIdResponse
     */
    public function getId(GetIdRequest $args)
    {
        $result = parent::getId($args->toArray());
        return new GetIdResponse($result->toArray());
    }
}
