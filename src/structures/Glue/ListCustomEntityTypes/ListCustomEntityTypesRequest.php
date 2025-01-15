<?php

namespace Sunaoka\Aws\Structures\Glue\ListCustomEntityTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property array<string, string>|null $Tags
 */
class ListCustomEntityTypesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
