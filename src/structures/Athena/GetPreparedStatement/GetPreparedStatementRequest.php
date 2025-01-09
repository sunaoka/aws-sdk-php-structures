<?php

namespace Sunaoka\Aws\Structures\Athena\GetPreparedStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StatementName
 * @property string $WorkGroup
 */
class GetPreparedStatementRequest extends Request
{
    /**
     * @param array{
     *     StatementName: string,
     *     WorkGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
