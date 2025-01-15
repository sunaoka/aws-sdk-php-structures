<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServiceArn
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListOperationsRequest extends Request
{
    /**
     * @param array{
     *     ServiceArn: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
