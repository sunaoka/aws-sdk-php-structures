<?php

namespace Sunaoka\Aws\Structures\AIOps\GetInvestigationGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetInvestigationGroupPolicyRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
