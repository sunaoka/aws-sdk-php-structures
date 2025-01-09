<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficPolicyId
 */
class GetTrafficPolicyRequest extends Request
{
    /**
     * @param array{TrafficPolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
