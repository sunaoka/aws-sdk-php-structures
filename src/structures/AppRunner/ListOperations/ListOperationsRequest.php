<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListOperationsRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
