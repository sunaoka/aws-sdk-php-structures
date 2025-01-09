<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\GetQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $queryId
 */
class GetQueryRequest extends Request
{
    /**
     * @param array{
     *     graphIdentifier: string,
     *     queryId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
