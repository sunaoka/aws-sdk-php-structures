<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListResourceSetResourcesRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
