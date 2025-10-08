<?php

namespace Sunaoka\Aws\Structures\Kms\Sign;

trait SignTrait
{
    /**
     * @param SignRequest $args
     * @return SignResponse
     */
    public function sign(SignRequest $args)
    {
        $result = parent::sign($args->toArray());
        return new SignResponse($result->toArray());
    }
}
