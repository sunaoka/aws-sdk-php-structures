<?php

namespace Sunaoka\Aws\Structures\Ec2\RestoreAddressToClassic;

trait RestoreAddressToClassicTrait
{
    /**
     * @param RestoreAddressToClassicRequest $args
     * @return RestoreAddressToClassicResponse
     */
    public function restoreAddressToClassic(RestoreAddressToClassicRequest $args)
    {
        $result = parent::restoreAddressToClassic($args->toArray());
        return new RestoreAddressToClassicResponse($result->toArray());
    }
}
