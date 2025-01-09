<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetTest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetTestRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
