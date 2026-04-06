<?php

namespace Sunaoka\Aws\Structures\Neptunedata\CancelOpenCypherQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 * @property bool|null $silent
 */
class CancelOpenCypherQueryRequest extends Request
{
    /**
     * @param array{
     *     queryId: string,
     *     silent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
