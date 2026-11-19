<?php

namespace Sunaoka\Aws\Structures\Signin\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionArn
 * @property string|null $principalArn
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{
     *     sessionArn: string,
     *     principalArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
