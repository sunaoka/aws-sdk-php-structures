<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostSupportedInstanceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OutpostIdentifier
 * @property string|null $OrderId
 * @property string|null $AssetId
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 */
class GetOutpostSupportedInstanceTypesRequest extends Request
{
    /**
     * @param array{
     *     OutpostIdentifier: string,
     *     OrderId?: string|null,
     *     AssetId?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
