<?php

namespace Sunaoka\Aws\Structures\EntityResolution\GetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetPolicyRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
