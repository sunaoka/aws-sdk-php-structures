<?php

namespace Sunaoka\Aws\Structures\MediaConnect\TakeRouterInput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouterOutputArn
 * @property string|null $RouterInputArn
 */
class TakeRouterInputRequest extends Request
{
    /**
     * @param array{
     *     RouterOutputArn: string,
     *     RouterInputArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
