<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\DeleteNetworkProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkProfileArn
 */
class DeleteNetworkProfileRequest extends Request
{
    /**
     * @param array{NetworkProfileArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
