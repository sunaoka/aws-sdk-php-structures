<?php

namespace Sunaoka\Aws\Structures\drs\DeleteJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobID
 */
class DeleteJobRequest extends Request
{
    /**
     * @param array{jobID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
