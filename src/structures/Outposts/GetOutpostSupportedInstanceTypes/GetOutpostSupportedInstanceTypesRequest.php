<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostSupportedInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string $OrderId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetOutpostSupportedInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     OrderId: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
