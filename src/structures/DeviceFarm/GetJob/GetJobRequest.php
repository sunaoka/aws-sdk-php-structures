<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetJobRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
