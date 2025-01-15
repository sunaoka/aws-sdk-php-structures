<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostId
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class GetOutpostInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     OutpostId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
