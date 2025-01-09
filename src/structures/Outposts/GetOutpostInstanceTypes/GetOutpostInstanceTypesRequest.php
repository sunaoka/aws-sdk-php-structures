<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class GetOutpostInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     OutpostId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
