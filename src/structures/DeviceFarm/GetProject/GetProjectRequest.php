<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetProjectRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
