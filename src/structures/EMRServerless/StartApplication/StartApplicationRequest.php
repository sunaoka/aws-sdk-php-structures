<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 */
class StartApplicationRequest extends Request
{
    /**
     * @param array{applicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
