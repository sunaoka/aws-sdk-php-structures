<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RestartRouterInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class RestartRouterInputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
