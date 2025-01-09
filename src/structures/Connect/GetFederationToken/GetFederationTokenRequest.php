<?php

namespace Sunaoka\Aws\Structures\Connect\GetFederationToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 */
class GetFederationTokenRequest extends Request
{
    /**
     * @param array{InstanceId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
