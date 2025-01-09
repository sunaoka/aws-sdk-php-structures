<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyId
 * @property string $resourceArn
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     policyId: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
