<?php

namespace Sunaoka\Aws\Structures\Braket\CancelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobArn
 */
class CancelJobRequest extends Request
{
    /**
     * @param array{jobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
