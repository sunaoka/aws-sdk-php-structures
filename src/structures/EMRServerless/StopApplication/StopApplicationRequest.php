<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StopApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 */
class StopApplicationRequest extends Request
{
    /**
     * @param array{applicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
