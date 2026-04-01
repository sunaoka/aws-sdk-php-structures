<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{applicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
