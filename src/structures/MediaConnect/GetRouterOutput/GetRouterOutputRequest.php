<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetRouterOutputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
