<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationArn
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{applicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
