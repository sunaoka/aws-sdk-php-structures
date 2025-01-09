<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListResourceSetResourcesRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
