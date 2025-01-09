<?php

namespace Sunaoka\Aws\Structures\Iam\GetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyArn
 */
class GetPolicyRequest extends Request
{
    /**
     * @param array{PolicyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
