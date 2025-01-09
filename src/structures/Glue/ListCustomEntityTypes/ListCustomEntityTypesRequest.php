<?php

namespace Sunaoka\Aws\Structures\Glue\ListCustomEntityTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property array<string, string> $Tags
 */
class ListCustomEntityTypesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
