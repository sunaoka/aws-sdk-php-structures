<?php

namespace Sunaoka\Aws\Structures\MailManager\DeleteTrafficPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrafficPolicyId
 */
class DeleteTrafficPolicyRequest extends Request
{
    /**
     * @param array{TrafficPolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
