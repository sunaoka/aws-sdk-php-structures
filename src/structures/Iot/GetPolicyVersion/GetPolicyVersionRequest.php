<?php

namespace Sunaoka\Aws\Structures\Iot\GetPolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $policyVersionId
 */
class GetPolicyVersionRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     policyVersionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
