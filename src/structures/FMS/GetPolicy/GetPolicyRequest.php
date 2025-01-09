<?php

namespace Sunaoka\Aws\Structures\FMS\GetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 */
class GetPolicyRequest extends Request
{
    /**
     * @param array{PolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
