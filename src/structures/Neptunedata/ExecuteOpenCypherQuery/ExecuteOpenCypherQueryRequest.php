<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteOpenCypherQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $openCypherQuery
 * @property string $parameters
 */
class ExecuteOpenCypherQueryRequest extends Request
{
    /**
     * @param array{
     *     openCypherQuery: string,
     *     parameters?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
