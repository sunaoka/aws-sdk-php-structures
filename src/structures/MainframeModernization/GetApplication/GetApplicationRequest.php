<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 */
class GetApplicationRequest extends Request
{
    /**
     * @param array{applicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
