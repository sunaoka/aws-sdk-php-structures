<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetPreparedStatement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PreparedStatementNames
 * @property string $WorkGroup
 */
class BatchGetPreparedStatementRequest extends Request
{
    /**
     * @param array{
     *     PreparedStatementNames: list<string>,
     *     WorkGroup: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
