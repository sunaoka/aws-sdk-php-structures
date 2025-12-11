<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartRouterOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class StartRouterOutputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
