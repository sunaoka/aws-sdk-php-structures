<?php

namespace Sunaoka\Aws\Structures\Iot\DeletePolicyVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $policyVersionId
 */
class DeletePolicyVersionRequest extends Request
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
