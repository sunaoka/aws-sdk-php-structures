<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobIdentifier
 */
class GetModelImportJobRequest extends Request
{
    /**
     * @param array{jobIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
