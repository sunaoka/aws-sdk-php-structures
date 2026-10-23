<?php

namespace Sunaoka\Aws\Structures\Continuum\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
