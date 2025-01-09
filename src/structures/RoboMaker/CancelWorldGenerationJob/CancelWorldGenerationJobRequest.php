<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CancelWorldGenerationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $job
 */
class CancelWorldGenerationJobRequest extends Request
{
    /**
     * @param array{job: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
