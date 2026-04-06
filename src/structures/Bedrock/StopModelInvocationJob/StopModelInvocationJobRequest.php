<?php

namespace Sunaoka\Aws\Structures\Bedrock\StopModelInvocationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobIdentifier
 */
class StopModelInvocationJobRequest extends Request
{
    /**
     * @param array{jobIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
