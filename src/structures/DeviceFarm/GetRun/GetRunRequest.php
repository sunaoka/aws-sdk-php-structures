<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetRunRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
