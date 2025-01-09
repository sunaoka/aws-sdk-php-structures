<?php

namespace Sunaoka\Aws\Structures\Glue\GetStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property int $Id
 * @property string $RequestOrigin
 */
class GetStatementRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     Id: int,
     *     RequestOrigin?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
