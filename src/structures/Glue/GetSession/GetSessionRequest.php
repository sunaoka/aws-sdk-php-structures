<?php

namespace Sunaoka\Aws\Structures\Glue\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $RequestOrigin
 */
class GetSessionRequest extends Request
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
