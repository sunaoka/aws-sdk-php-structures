<?php

namespace Sunaoka\Aws\Structures\AIOps\DeleteInvestigationGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class DeleteInvestigationGroupPolicyRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
