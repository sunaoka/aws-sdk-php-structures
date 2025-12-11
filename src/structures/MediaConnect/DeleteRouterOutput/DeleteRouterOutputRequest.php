<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteRouterOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteRouterOutputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
