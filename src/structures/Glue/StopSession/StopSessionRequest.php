<?php

namespace Sunaoka\Aws\Structures\Glue\StopSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $RequestOrigin
 */
class StopSessionRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     RequestOrigin?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
