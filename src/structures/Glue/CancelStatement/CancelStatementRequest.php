<?php

namespace Sunaoka\Aws\Structures\Glue\CancelStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property int $Id
 * @property string|null $RequestOrigin
 */
class CancelStatementRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     Id: int,
     *     RequestOrigin?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
