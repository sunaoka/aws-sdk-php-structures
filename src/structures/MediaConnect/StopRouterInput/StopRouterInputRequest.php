<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopRouterInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class StopRouterInputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
