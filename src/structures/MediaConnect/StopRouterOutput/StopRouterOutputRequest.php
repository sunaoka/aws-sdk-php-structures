<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopRouterOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class StopRouterOutputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
