<?php

namespace Sunaoka\Aws\Structures\Glue\RunStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property string $Code
 * @property string|null $RequestOrigin
 */
class RunStatementRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     Code: string,
     *     RequestOrigin?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
