<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CreateApplicationRequest $CreateApplicationRequest
 */
class CreateAppRequest extends Request
{
    /**
     * @param array{CreateApplicationRequest: Shapes\CreateApplicationRequest} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
