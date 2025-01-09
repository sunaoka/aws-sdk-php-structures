<?php

namespace Sunaoka\Aws\Structures\Glue\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $RequestOrigin
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     RequestOrigin?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
