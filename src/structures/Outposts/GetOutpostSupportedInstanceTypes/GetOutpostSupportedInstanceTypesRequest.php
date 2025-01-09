<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostSupportedInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string $OrderId
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 */
class GetOutpostSupportedInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     OrderId?: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
