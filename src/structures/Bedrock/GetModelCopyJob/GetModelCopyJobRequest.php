<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCopyJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobArn
 */
class GetModelCopyJobRequest extends Request
{
    /**
     * @param array{jobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
