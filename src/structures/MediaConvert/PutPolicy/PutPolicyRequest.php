<?php

namespace Sunaoka\Aws\Structures\MediaConvert\PutPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Policy $Policy
 */
class PutPolicyRequest extends Request
{
    /**
     * @param array{Policy: Shapes\Policy} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
