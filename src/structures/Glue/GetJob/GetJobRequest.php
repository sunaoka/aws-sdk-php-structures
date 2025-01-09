<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobName
 */
class GetJobRequest extends Request
{
    /**
     * @param array{JobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
