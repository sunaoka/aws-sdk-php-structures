<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RestartRouterOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class RestartRouterOutputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
