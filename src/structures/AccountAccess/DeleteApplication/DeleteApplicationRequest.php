<?php

namespace Sunaoka\Aws\Structures\AccountAccess\DeleteApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationArn
 */
class DeleteApplicationRequest extends Request
{
    /**
     * @param array{applicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
