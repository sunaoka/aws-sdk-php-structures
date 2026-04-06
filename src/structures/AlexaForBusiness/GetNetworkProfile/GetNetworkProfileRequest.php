<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetNetworkProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkProfileArn
 */
class GetNetworkProfileRequest extends Request
{
    /**
     * @param array{NetworkProfileArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
