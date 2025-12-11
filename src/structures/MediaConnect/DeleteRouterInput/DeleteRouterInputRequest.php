<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteRouterInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DeleteRouterInputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
