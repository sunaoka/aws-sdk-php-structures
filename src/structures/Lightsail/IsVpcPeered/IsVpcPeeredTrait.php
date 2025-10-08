<?php

namespace Sunaoka\Aws\Structures\Lightsail\IsVpcPeered;

trait IsVpcPeeredTrait
{
    /**
     * @param IsVpcPeeredRequest $args
     * @return IsVpcPeeredResponse
     */
    public function isVpcPeered(IsVpcPeeredRequest $args)
    {
        $result = parent::isVpcPeered($args->toArray());
        return new IsVpcPeeredResponse($result->toArray());
    }
}
