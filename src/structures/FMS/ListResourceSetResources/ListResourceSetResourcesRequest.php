<?php

namespace Sunaoka\Aws\Structures\FMS\ListResourceSetResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListResourceSetResourcesRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
