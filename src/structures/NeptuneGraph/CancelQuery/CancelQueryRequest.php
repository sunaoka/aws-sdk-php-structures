<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CancelQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $graphIdentifier
 * @property string $queryId
 */
class CancelQueryRequest extends Request
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
