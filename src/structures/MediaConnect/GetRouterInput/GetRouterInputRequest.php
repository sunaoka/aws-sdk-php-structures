<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetRouterInputRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
