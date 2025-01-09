<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class StopJobRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
