<?php

namespace Sunaoka\Aws\Structures\Inspector2\SendCisSessionHealth;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanJobId
 * @property string $sessionToken
 */
class SendCisSessionHealthRequest extends Request
{
    /**
     * @param array{
     *     scanJobId: string,
     *     sessionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
