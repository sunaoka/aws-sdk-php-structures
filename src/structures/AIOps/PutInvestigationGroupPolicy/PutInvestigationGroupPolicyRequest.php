<?php

namespace Sunaoka\Aws\Structures\AIOps\PutInvestigationGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 * @property string $policy
 */
class PutInvestigationGroupPolicyRequest extends Request
{
    /**
     * @param array{
     *     identifier: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
