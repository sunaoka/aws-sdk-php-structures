<?php

namespace Sunaoka\Aws\Structures\Glue\RunStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property string $Code
 * @property string $RequestOrigin
 */
class RunStatementRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     Code: string,
     *     RequestOrigin?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
