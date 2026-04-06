<?php

namespace Sunaoka\Aws\Structures\Kms\RotateKeyOnDemand;

trait RotateKeyOnDemandTrait
{
    /**
     * @param RotateKeyOnDemandRequest $args
     * @return RotateKeyOnDemandResponse
     */
    public function rotateKeyOnDemand(RotateKeyOnDemandRequest $args)
    {
        $result = parent::rotateKeyOnDemand($args->toArray());
        return new RotateKeyOnDemandResponse($result->toArray());
    }
}
