<?php

namespace Sunaoka\Aws\Structures\Route53\GetTrafficPolicyInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetTrafficPolicyInstanceRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
