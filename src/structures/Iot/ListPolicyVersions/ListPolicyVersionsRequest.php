<?php

namespace Sunaoka\Aws\Structures\Iot\ListPolicyVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 */
class ListPolicyVersionsRequest extends Request
{
    /**
     * @param array{policyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
