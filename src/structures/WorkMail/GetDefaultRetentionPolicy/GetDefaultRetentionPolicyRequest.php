<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetDefaultRetentionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 */
class GetDefaultRetentionPolicyRequest extends Request
{
    /**
     * @param array{OrganizationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
