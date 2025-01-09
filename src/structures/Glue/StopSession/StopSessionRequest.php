<?php

namespace Sunaoka\Aws\Structures\Glue\StopSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $RequestOrigin
 */
class StopSessionRequest extends Request
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
